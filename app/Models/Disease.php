<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'symptoms'];

    // If you are storing symptoms as a JSON column, ensure it's cast properly
    protected $casts = [
        'symptoms' => 'array',
    ];
}
