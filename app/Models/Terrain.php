<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terrain extends Model
{
    /** @use HasFactory<\Database\Factories\TerrainFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'desciption',
        'location',
        'area_size',
        'price_per_day',
        'available_from',
        'available_to',
        'is_available',
        'main_image',
    ];
}
