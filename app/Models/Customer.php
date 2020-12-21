<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function Booking()
    {
        return $this->hasMany('App\Models\Booking');
    }
}
