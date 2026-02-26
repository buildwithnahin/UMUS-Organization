<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

echo "✨ Updated Slider Contents:\n";
echo "===========================\n\n";

$sliders = DB::table('slider')->get();

foreach($sliders as $slider) {
    echo "🎯 Slider ID: " . $slider->id . "\n";
    echo "📌 Title: " . $slider->title . "\n";
    echo "📝 Description: " . $slider->description . "\n";
    echo "───────────────────────────────────────\n\n";
}
