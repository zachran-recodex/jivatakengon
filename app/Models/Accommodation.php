<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'image',
        'is_active'
    ];
}
