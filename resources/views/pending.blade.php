@extends('layouts.dash')
@section('title', 'Gout | Pendiente')
@section('container')

    @can('make bookings')

            <header class="row p-1 justify-content-between align-items-center">
                <div class="col-sm-7 ">
                    <h2 class="col-sm-8 text-xl-left text-sm-left text-center pl-3  pt-4 text-left">{{__('Pendientes')}}</h2>
                </div>
                <div class="col-sm-3 text-center pt-4">
                    <a href="{{ route('index')}}" class="btn btn-outline-success  btn-sm">Nueva Reserva</a>

                </div>
            
            </header>
            <hr>
            @forelse ($reservas as $reserva)
                
                    <div class="row align-items-center justify-content-around rounded text-xl-left text-sm-left text-center">
                        <div class=" col-sm-1 pb-1">
                            <a href="{{route('profile.profile', ['id'=> $reserva->shop_id])}}"><i class="fas fa-store text-dark fa-2x  pl-1"></i></a>
                         </div>
                        <div class="col-sm-3 border-right text-xl-left">
                            <h6><strong>{{ $reserva->nombre_comercio}}</strong></h6>
                        
                        </div>
                        <div class="col-sm-2 border-right ">
                            <div>
                                <p class="m-0 p-0">{{ __('Fecha')}}</p>
                                <small class="m-0 p-0">{{ $reserva->fecha}}</small>
                            </div>

                        </div>
                        <div class="col-sm-2 border-right">
                            <div>
                                <p class="m-0 p-0">{{ __('Hora')}}</p>
                                <small class="m-0 p-0">{{ $reserva->hora." :00 Hs"}}</small>
                            </div>

                        </div>
                        <div class="col-sm-2  text-center ">

                                <a  class="btn p-1 m-0 text-secondary" href="#"><i id="{{$reserva->id}}" class="fas fa-list boton"></i></a>
                                <a class="btn p-1 m-0 text-danger" href="{{route('booking.show', ['booking' => $reserva->id ] ) }}"><i class="fas fa-window-close "></i></a>


                        </div>
                    </div>
                    <div class="row aclaracion {{"boton".$reserva->id}}" style="display: none">
                        
                        <div class="col-sm-12">
                            <hr>
                            
                            <p class="pl-2 mb-0 mt-0">Aclaraciones: <br> <small>  
                                @if ($reserva->aclaraciones)
                                    {{$reserva->aclaraciones}}
                                @else
                                    {{"No has realizado aclaraciones sobre la reserva"}}
                                @endif 
                            </small>
                            </p>
                        </div>
                    </div>
                    <hr>

            @empty
                <h2 class="text-secondary p-5 text-center">No tiene reservas pendientes.</h2>
                <p class="text-secondary p-5 text-center">Para realizar una reserva haz click en "Nueva reserva".</p>
            @endforelse
                    
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
                    <script>
                            $(document).ready(function(){
                                $('.boton').click(function(){
                                   var $id = $(this).attr('id');
                                   $('.boton'+$id).slideToggle();
                                
                                })
                                
                            });
                    </script>
 
    @endcan

    @can('take bookings')
            
            <h2 class="pt-3 pb-3 pl-4 mt-2  text-left">{{ __('Reservas pendientes')}}</h2>
            <hr>
                 @forelse ($reservas as $reserva)
                                        
                        <div class="row align-items-center justify-content-around rounded text-xl-left text-sm-left text-center">
                            <div class=" col-sm-1 col-12 pb-1">
                                <a href="#"><i class="fas fa-user-circle text-dark fa-2x  pl-3"></i></a>
                             </div>
                            <div class="col-sm-2 col-12 border-right text-xl-left text-center">
                                <h5><strong>{{ $reserva->nombre_cliente}}</strong></h5>
                            
                            </div>
                            <div class="col-sm-2 col-12 border-right ">
                                <div>
                                    <p class="m-0 p-0">{{ __('Fecha')}}</p>
                                    <small class="m-0 p-0">{{ $reserva->fecha}}</small>
                                </div>
    
                            </div>
                            <div class="col-sm-2 col-12 border-right">
                                <div>
                                    <p class="m-0 p-0">{{ __('Hora')}}</p>
                                    <small class="m-0 p-0">{{ $reserva->hora." :00 Hs"}}</small>
                                </div>
    
                            </div>            
                            <div class="col-sm-2  text-center ">

                                <a  class="btn p-0 m-0 text-secondary" title="Ver detalle" href="#"><i id="{{$reserva->id}}" class="fas fa-list boton fa-2x"></i></a>
                                <a class="btn p-0  m-0 text-danger" title="Finalizar" href="{{route('booking.edit', ['booking' => $reserva->id])}}"><i class="fas fa-window-close fa-2x"></i></a>


                            </div>
                        </div>
                        <div class="row aclaracion {{"boton".$reserva->id}}" style="display: none">
                        
                                <div class="col-sm-12">
                                    <hr>

                                    <p class="pl-2 mb-0 mt-0">Aclaraciones: <br> <small>  
                                        @if ($reserva->aclaraciones)
                                            {{$reserva->aclaraciones}}
                                        @else
                                            {{"No han realizado aclaraciones sobre la reserva"}}
                                        @endif 
                                    </small>
                                    </p>
                                </div>
                        </div>
                        <hr>
                    
                @empty
                    <h2 class="text-secondary p-5 text-center">No han realizado reservas aún.</h2>
                @endforelse                   
                            
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
                    <script>
                            $(document).ready(function(){
                                $('.boton').click(function(){
                                   var $id = $(this).attr('id');
                                   $('.boton'+$id).slideToggle();
                                
                                })
                                
                            });
                    </script>

    @endcan
   
@endsection