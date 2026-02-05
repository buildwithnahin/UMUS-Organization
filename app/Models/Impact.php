<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impact extends Model
{
    use HasFactory;

    protected $table = 'impact';

    protected $fillable = [
        'title',
        'metric_value',
        'metric_unit',
        'description',
        'icon',
        'year',
        'order'
    ];

    protected $casts = [
        'year' => 'integer',
        'order' => 'integer',
    ];
}
