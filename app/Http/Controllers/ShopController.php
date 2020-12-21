<?php

namespace App\Http\Controllers;


use Spatie\Permission\Models\Role;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop = Auth::user()->Shop;
        return view('commerce.option', ['shop'=> $shop]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('commerce.create-commerce');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'nombre' => 'required',
            'provincia' => 'required',
            'localidad' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'capacidad' => 'required',
            'dias_horarios' => 'required',
            'avatar' => 'image|max:2048'
        ]);
        
        $shop= new Shop();
        $shop->nombre = $request->nombre;
        $shop->provincia = $request->provincia;
        $shop->localidad = $request->localidad;
        $shop->direccion = $request->direccion;
        $shop->telefono = $request->telefono;
        $shop->capacidad = $request->capacidad;
        $shop->dias_horarios = $request->dias_horarios;
        $shop->reseña = $request->reseña;
        
        if ($request->file('avatar') === null) {
            $file = '';
        }else{
            $file = $request->file('avatar')->store('avatar/'.$shop->id);
        }

        $shop->avatar = $file;
        $userId = Auth::user()->id;
        $shop->user_id = $userId;
        
        $user = $userId;
        $user->removeRole('customer');
        $user->assignRole('commerce');
        
        $shop->save();

        return redirect()->route('home');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('commerce.update-commerce', ['shop'=> Shop::find($id) ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $shop = Shop::find($id);
        $shop->nombre = $request->input('nombre');
        $shop->provincia = $request->input('provincia');
        $shop->localidad = $request->input('localidad');
        $shop->direccion = $request->input('direccion');
        $shop->telefono = $request->input('telefono');
        $shop->capacidad = $request->input('capacidad');
        $shop->dias_horarios = $request->input('dias_horarios');
        $shop->reseña = $request->input('reseña');
        $path = $request->file('avatar');
        
        if ($path == null || $path == "") {
           $shop->save();
        }else{
            $shop->avatar = $path->store('avatar/'.$shop->id);
            $shop->save();
        }

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
