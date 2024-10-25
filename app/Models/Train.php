<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;
    protected static function booted()
    {
        static::creating(function($train) {
            $train->data_odierna = now()->toDateString();
        });
    }
}
