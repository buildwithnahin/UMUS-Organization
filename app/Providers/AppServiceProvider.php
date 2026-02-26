<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        paginator::useBootstrap();
        
        // Share contact data with all views
        View::composer('*', function ($view) {
            $headOffice = DB::table('contacts')
                ->where('type', 'head_office')
                ->where('status', 'active')
                ->first();
            $view->with('headOfficeContact', $headOffice);
        });
    }
}
