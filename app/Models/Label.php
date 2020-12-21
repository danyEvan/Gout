<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    use HasFactory;

         //RELACION MUCHOS A MUCHOS
         public function shops(){
            return $this->belongsToMany('App\Models\Shop');
        }
}
