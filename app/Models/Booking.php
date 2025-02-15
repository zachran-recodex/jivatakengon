<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'date',
        'name',
        'glamping',
        'villa',
        'tent',
        'total_tents',
        'dp',
        'transfer_date',
        'note'
    ];

    protected $casts = [
        'glamping' => 'array',
        'villa' => 'array',
        'date' => 'date',
        'transfer_date' => 'date',
    ];
}
