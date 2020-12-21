<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function Customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }
    public function Shop()
    {
        return $this->belongsTo('App\Models\Shop');
    }
}
