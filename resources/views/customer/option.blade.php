@extends('layouts.dash')
@section('title', 'Gout | Perfil')
@section('container')

    @can('make bookings')
                <h2 class="text-left p-4 mt-1">Perfil</h2>
                
                <div class="row justify-content-center pt-4">

                    <div class="col-xl-8 col-lg-10 col-sm-12  col-12 pt-1">
                      @if ($customer != "")
                      <a class="nav-link p-3 m-3 border rounded text-center shadow" href="{{ route('Customer.edit', [ 'Customer' => $customer->id ] ) }}">Modificar Datos</a>
                      @else
                      <a class="nav-link p-3 m-3 border rounded text-center shadow" href="{{ route('Customer.create') }}">Datos Personales</a>
                      @endif
                      <a class="nav-link p-3 m-3 border rounded text-center shadow" href="{{ route('Shop.create') }}">Cambiar a cuenta comercio</a>
                        
                    </div>
                </div>                    

                    
                <small><a class="nav-link p-4 text-center" href="">Eliminar Cuenta</a></small>
                   
             
    @endcan

    

@endsection