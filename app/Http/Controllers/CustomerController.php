<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Auth::user()->Customer;
        if ($customer != null ) {
            return view('customer.option', [ 'customer' => $customer]);
        }else{
            return view('customer.option', [ 'customer' => ""]);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create-profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $customer = new Customer();
        $customer->nombre = $request->nombre;
        $customer->apellido = $request->apellido;
        $customer->direccion = $request->direccion;
        $customer->provincia = $request->provincia;
        $customer->localidad = $request->localidad;
        $customer->telefono = $request->telefono;
        $path = $request->file('avatar')->store('avatar/'.$customer->nombre.$customer->apellido);
        $customer->avatar = $path;
        $user = Auth::user()->id;
        $customer->user_id = $user;
        $customer->save();

        return redirect()->route('Customer.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    public function show($id)
    {
        //
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        return view('customer.update-profile', [ 'customer' => Customer::find($id)]);
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
    

        $customer= Customer::find($id);
        $customer->nombre = $request->input('nombre');
        $customer->apellido = $request->input('apellido');
        $customer->direccion = $request->input('direccion');
        $customer->provincia = $request->input('provincia');
        $customer->localidad = $request->input('localidad');
        $customer->telefono = $request->input('telefono');
        
        $path = $request->file('avatar');
        if ($path == null || $path == "") {
            
            $customer->save();
        }else{
            $customer->avatar = $path->store('avatar'.$customer->nombre.$customer->apellido);
            $customer->save();
        }
        
       return redirect()->route('Customer.index');
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
