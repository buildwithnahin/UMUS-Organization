<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use Illuminate\Support\Facades\DB;

echo "🔄 Adding contact information...\n\n";

// Check if head office already exists
$existingHeadOffice = DB::table('contacts')->where('type', 'head_office')->first();

if ($existingHeadOffice) {
    // Update existing head office
    DB::table('contacts')->where('type', 'head_office')->update([
        'title' => 'Head Office',
        'address' => 'Village: Tala, Post Office: Tala, Upazila: Tala, District: Satkhira, Bangladesh, Post Code: 9420. (Located on the west side of Muktijoddha College)',
        'mobile' => '+88 01712394855',
        'mobile2' => '+880 1745-953020',
        'email' => 'uddipto.org@gmail.com',
        'email2' => 'uddipto.jayontidas@yahoo.com',
        'whatsapp' => '+88 01712394855',
        'status' => 'active',
        'updated_at' => now()
    ]);
    echo "✅ Head Office contact updated\n";
} else {
    // Insert new head office
    DB::table('contacts')->insert([
        'type' => 'head_office',
        'title' => 'Head Office',
        'address' => 'Village: Tala, Post Office: Tala, Upazila: Tala, District: Satkhira, Bangladesh, Post Code: 9420. (Located on the west side of Muktijoddha College)',
        'name' => null,
        'mobile' => '+88 01712394855',
        'mobile2' => '+880 1745-953020',
        'email' => 'uddipto.org@gmail.com',
        'email2' => 'uddipto.jayontidas@yahoo.com',
        'skype' => null,
        'whatsapp' => '+88 01712394855',
        'twitter' => null,
        'status' => 'active',
        'created_at' => now(),
        'updated_at' => now()
    ]);
    echo "✅ Head Office contact added\n";
}

// Check if founding office exists
$existingFoundingOffice = DB::table('contacts')
    ->where('type', 'branch')
    ->where('title', 'Founding Office')
    ->first();

if ($existingFoundingOffice) {
    // Update existing founding office
    DB::table('contacts')
        ->where('type', 'branch')
        ->where('title', 'Founding Office')
        ->update([
            'address' => 'Village: Sujanshaha (Daspara), Post Office: Sujanshaha, Upazila: Tala, District: Satkhira, Bangladesh, Post Code: 9420.',
            'mobile' => '+88 01712394855',
            'mobile2' => '+880 1745-953020',
            'email' => 'uddipto.org@gmail.com',
            'whatsapp' => '+88 01712394855',
            'status' => 'active',
            'updated_at' => now()
        ]);
    echo "✅ Founding Office contact updated\n";
} else {
    // Insert founding office
    DB::table('contacts')->insert([
        'type' => 'branch',
        'title' => 'Founding Office',
        'address' => 'Village: Sujanshaha (Daspara), Post Office: Sujanshaha, Upazila: Tala, District: Satkhira, Bangladesh, Post Code: 9420.',
        'name' => null,
        'mobile' => '+88 01712394855',
        'mobile2' => '+880 1745-953020',
        'email' => 'uddipto.org@gmail.com',
        'email2' => null,
        'skype' => null,
        'whatsapp' => '+88 01712394855',
        'twitter' => null,
        'status' => 'active',
        'created_at' => now(),
        'updated_at' => now()
    ]);
    echo "✅ Founding Office contact added\n";
}

echo "\n📋 Summary:\n";
echo "📍 Head Office: Tala, Satkhira\n";
echo "📍 Founding Office: Sujanshaha (Daspara), Tala, Satkhira\n";
echo "📞 Phone: +88 01712394855, +880 1745-953020\n";
echo "📧 Email: uddipto.org@gmail.com, uddipto.jayontidas@yahoo.com\n";
echo "💬 WhatsApp: +88 01712394855\n";
echo "\n✅ All contact information saved successfully!\n";
