<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ProfileController extends Controller
{
    public function Profile($id){
        $perfil = Shop::find($id);
        if($perfil){
            return view('profile')->with('perfil',$perfil)->with('menus',$perfil->Menu);
        }else{
            abort(404,"not found");
        }
        
    }
}
