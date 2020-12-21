@extends('layouts.dash')
@section('title', 'Gout | Menu')
@section('container')


    @can('take bookings')
          <header class="row p-1 justify-content-between align-items-center">
              <div class="col-sm-7 ">
                  <h2 class="col-sm-8 text-xl-left text-sm-left text-center pl-3  pt-4 text-left">Menus</h2>
              </div>
              <div class="col-sm-3 text-center pt-4">
              <a href="{{ route('menu.create') }}" class="btn btn-outline-success  btn-sm">Crear menu</a>
              </div>
            
          </header>
          <hr>
    <!--MENU-->


          
                        @forelse ($menus as $menu)
                                <div class="row align-items-center justify-content-around rounded p-0 ml-1">
                                        <div class=" col-sm-2">
                                              <img class="img-fluid rounded "  src="{{ asset('storage/'.$menu->imagen) }}" alt="negocio">
                                        </div>
                                        <div class="col-sm-3 border-right">
                                            <p class="p-0 m-0"><strong>{{ $menu->nombre }}</strong></p>
                                            <small class="p-0 mt-1">{{ 'Cod: '.$menu->codigo_menu }}</small>
                                        </div>
                                      
                                        <div class="col-sm-5 border-right">
                                            <p class="m-0 p-0">{{ __('Descripcion')}}</p>
                                            <small class="m-0 p-0">{{ $menu->descripcion }}</small>
                                        </div>
                                        <div class="col-sm-2 mt-1 text-center ">
                                        
                                                <a class="btn p-1 m-0 text-dark" href="{{ route('menu.edit', [ 'menu' => $menu->id ] )}}"><i class="fas fa-edit fa-2x"></i></a>
                                                <a class="btn p-1 m-0 text-danger" href="{{ route('menu.show', [ 'menu' => $menu->id ] )}}"><i class=" fas fa-window-close fa-2x"></i></a>
                                        
                                        
                                        </div>
                                </div>
                                <hr>
                        @empty
                          <div class="row justify-content-center p-5">
                            <h3 class=" text-secondary  pt-5 mt-4">No tienes menus disponibles.</h3>
                            <p class=" text-secondary ">Utiliza el boton "Crear menu" para cargar tus menus disponibles.</p>
                          </div>
                              
                        @endforelse

    @endcan

@endsection