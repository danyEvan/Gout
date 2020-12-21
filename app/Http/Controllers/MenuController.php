<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Auth::user()->Shop->Menu;
        return view('menus.menu', [ 'menus' => $menus]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu = new Menu();
        $menu->nombre = $request->input('nombre');
        $menu->descripcion = $request->input('descripcion');
        $menu->codigo_menu = $request->input('codigo_menu');
        $path = $request->file('imagen')->store('Menu/'.Auth::user()->Shop->nombre);
        $menu->imagen = $path;
        $shopId = Auth::user()->Shop->id;
        $menu->shop_id = $shopId;
        $menu->save();

        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('menus.delete', [ 'menu' => Menu::find($id) ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        return view('menus.edit', [ 'menu' => Menu::find($id) ]);
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
        $menu = Menu::find($id);
        $menu->nombre = $request->input('nombre');
        $menu->descripcion = $request->input('descripcion');
        $menu->codigo_menu = $request->input('codigo_menu');
        $path = $request->file('imagen');

        if ($path == null || $path == "") {
            $menu->save();
        }else{
            $menu->imagen = $path->store('Menu/'.Auth::user()->Shop->nombre);
            $menu->save();
        }

        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        Menu::find($id)->delete();
        return redirect()->route('menu.index');
    }
}
