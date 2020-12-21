<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function Shop()
    {
        return $this->belongsTo('App\Models\Shop');
    }
    public function Label()
    {
        return $this->belongsTo('App\Models\Label');
    }
}
