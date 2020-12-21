@extends('layouts.dash')
@section('title', 'Gout | Perfil')
@section('container')

    @can('take bookings')
    <h2 class="text-left p-4  mt-1">Perfil</h2>
    <hr>
                
    <div class="row justify-content-center pt-4 mt-5">

        <div class="col-xl-8 col-lg-10 col-sm-12  col-12 pt-1">
          
          <a class="nav-link p-3 m-3 border rounded text-center shadow" href="{{ route('Shop.edit', ['Shop'=> $shop->id ])}}">Modificar datos del comercio</a>
          
          <a class="nav-link p-3 m-3 border rounded text-center shadow" href="#">Eliminar Cuenta</a>
         
            
        </div>
    </div>                    

                
    @endcan

@endsection