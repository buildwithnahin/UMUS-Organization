<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

echo "Current Slider Contents:\n";
echo "========================\n\n";

$sliders = DB::table('slider')->get();

foreach($sliders as $slider) {
    echo "ID: " . $slider->id . "\n";
    echo "Title: " . $slider->title . "\n";
    echo "Description: " . $slider->description . "\n";
    echo "------------------------\n\n";
}

echo "\nUpdating Sliders with Women Empowerment Content...\n\n";

// Slider 1 (ID: 14): Women Empowerment
DB::table('slider')->where('id', 14)->update([
    'title' => 'Empowering Rural Women Since 2003',
    'description' => 'UMUS works to empower Dalit women and children in Satkhira through education, skill development, and economic opportunities. Together we build stronger communities for a brighter future.'
]);

// Slider 2 (ID: 17): Education & Skills
DB::table('slider')->where('id', 17)->update([
    'title' => 'Education & Skill Development for Women',
    'description' => 'Providing training, education, and livelihood opportunities to rural women. Helping them achieve financial independence, dignity, and confidence to lead their communities.'
]);

// Slider 3 (ID: 19): Community Support
DB::table('slider')->where('id', 19)->update([
    'title' => 'Building Stronger Communities Together',
    'description' => 'Working hand-in-hand with village women to create lasting change. Every woman empowered strengthens her family, her village, and our nation.'
]);

echo "✓ Sliders updated successfully!\n";
echo "✓ Content now reflects women empowerment mission\n";
