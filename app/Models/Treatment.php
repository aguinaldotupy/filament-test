<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'notes',
        'price',
    ];

    protected $casts = [
        'price' => \App\Casts\MoneyCast::class,
    ];
}
