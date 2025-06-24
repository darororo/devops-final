<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    /** @use HasFactory<\Database\Factories\MyModelFactory> */
    use HasFactory;
}
