<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Customer;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   //$time = getdate();
        //$fecha = $time['year'].'-'.$time['mon'].'-'.$time['mday'];
        $user = Auth::user();
        if ($user->can('make bookings')) {
            
            $tienePerfil = ($user->Customer) ? Booking::where('terminado',false)->where('customer_id', $user->Customer->id )->get() : null ;
            $reservas = ($tienePerfil) ? view('pending', ['reservas' => $tienePerfil]) : redirect()->route('Customer.create') ;
            return $reservas;

        }elseif ($user->can('take bookings')){
            $reservas = Booking::where('terminado', false)->get();
            return view('pending', ['reservas' => $reservas]);
        }
        
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
      
        
        $user = Auth::user();
        if ($user->Shop) {
            return redirect()->route('home');
        }
        $booking = new Booking();
        $booking->fecha = $request->fecha;
        $booking->hora = $request->hora;
        $booking->cantidad_personas = $request->cantidad_personas;
        $booking->aclaraciones = $request->aclaraciones;
        
        if ($user->Customer) {
            $booking->nombre_cliente = $user->Customer->nombre;
            $booking->nombre_comercio = $request->shopName;
            $booking->customer_id = $user->Customer->id;
            $booking->shop_id = $request->shopId;
            $booking->save();
            return redirect()->route('booking.index');
        } else {
            return redirect()->route('Customer.create');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $reservas = Booking::find($id);
        return view('customer.delete-booking', ['reserva'=> $reservas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $reserva = Booking::find($id);
        return view('commerce.update-booking')->with('reserva',$reserva);
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
        $reserva = Booking::find($id);
        $reserva->terminado = true;
        $reserva->save();

        return redirect()->route('booking.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Booking::find($id)->delete();
       return redirect()->route('booking.index');
    }
}
