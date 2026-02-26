<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Count statistics with safety checks
        $stats = [
            'total_programs' => DB::table('programs')->count(),
            'active_programs' => DB::table('programs')->where('status', 'active')->count(),
            'completed_programs' => DB::table('programs')->where('status', 'completed')->count(),
            'total_donations' => DB::getSchemaBuilder()->hasTable('donations') ? DB::table('donations')->count() : 0,
            'total_donation_amount' => DB::getSchemaBuilder()->hasTable('donations') ? DB::table('donations')->where('status', 'verified')->sum('amount') ?? 0 : 0,
            'pending_donations' => DB::getSchemaBuilder()->hasTable('donations') ? DB::table('donations')->where('status', 'pending')->count() : 0,
            'total_team_members' => DB::table('team_members')->count(),
            'total_executive_committee' => DB::table('executive_committee')->count(),
            'total_volunteers' => DB::table('volunteers')->count(),
            'total_publications' => DB::getSchemaBuilder()->hasTable('publications') ? DB::table('publications')->count() : 0,
            'total_stories' => DB::table('stories')->count(),
            'total_contacts' => DB::table('messages')->count(),
        ];

        // Recent activities
        $recent_donations = collect([]);
        if (DB::getSchemaBuilder()->hasTable('donations')) {
            $recent_donations = DB::table('donations')
                ->orderBy('id', 'desc')
                ->limit(5)
                ->get();
        }

        $recent_contacts = DB::table('messages')
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();

        $recent_volunteers = collect([]);
        if (DB::getSchemaBuilder()->hasTable('volunteer_registrations')) {
            $recent_volunteers = DB::table('volunteer_registrations')
                ->orderBy('id', 'desc')
                ->limit(5)
                ->get();
        }

        // Monthly donation stats (last 6 months)
        $monthly_donations = [];
        if (DB::getSchemaBuilder()->hasColumn('donations', 'created_at')) {
            $monthly_donations = DB::table('donations')
                ->select(DB::raw('MONTH(created_at) as month, YEAR(created_at) as year, COUNT(*) as count, SUM(amount) as total'))
                ->where('created_at', '>=', now()->subMonths(6))
                ->where('status', 'verified')
                ->groupBy(DB::raw('YEAR(created_at), MONTH(created_at)'))
                ->orderBy('year', 'asc')
                ->orderBy('month', 'asc')
                ->get();
        }

        // Program status distribution
        $program_stats = DB::table('programs')
            ->select('status', DB::raw('COUNT(*) as count'))
            ->groupBy('status')
            ->get();

        return view('admin.home', compact(
            'stats',
            'recent_donations',
            'recent_contacts',
            'recent_volunteers',
            'monthly_donations',
            'program_stats'
        ));
    }
}
