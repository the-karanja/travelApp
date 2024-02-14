<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accomodations extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description', 'start_date', 'end_date', 'rack_rate',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];
}
