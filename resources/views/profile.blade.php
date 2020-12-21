@extends('layouts.app')
@section('title', 'Perfil')

    @section('container')
        <nav class="nav bg-dark  p-0 m-0 pl-4">
            <p class="text-white p-0 m-0"> <strong class="p-0">{{ $perfil->nombre }}</strong> </p>
        </nav>
        <div class="container-fluid">
            <section class="row fondo3 justify-content-around " style="height: auto; width: auto;">
                <!--SECCION DATOS COMERCIO-->
                <div class="col-xl-11 p-3 mt-4 bg-white rounded shadow">
                    <div class="row justify-content-around">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 p-xl-2 p-4">
                            <img class="img-fluid rounded-circle"  src="{{ asset('storage/'.$perfil->avatar) }}" alt="Perfil">
                         </div>
                        <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12  p-2 ">
                            <div class="row pt-1 mt-5 ml-2">
                                <h1 class="col-12 pb-4">{{ $perfil->nombre }}</h1>
                                <div class=" col-12 mt-4 pl-3">
                                    <h6 class="p-0 m-0"> <strong>Direccion</strong></h6>
                                    <p>{{ $perfil->direccion }}</p>
                                </div>
                                <div class=" col-12 m-0 p-0 pl-3">
                                    <h6 class="p-0 m-0"> <strong>Dias y horarios</strong></h6>
                                    <p>{{ $perfil->dias_horarios }}</p>
                                </div>
                                <div class=" col-12 m-0 p-0 pl-3">
                                    <h6 class="p-0 m-0"> <strong>Telefono</strong></h6>
                                    <p>{{ $perfil->telefono }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
                <!--SECCION RESERVA y MENUS-->
                <div class="col-xl-11 mt-3 mb-3 p-2 bg-white rounded shadow">
                    <div class="row justify-content-around ">
                    <!--CONTENEDOR MENUS-->
                    <div class="  col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12  order-xl-1 order-lg-1 order-md-2 order-sm-2 order-2 ">
                            <!--MENU ITERABLE-->
                            
                            <h2 class="pt-3 text-xl-left text-sm-left text-center">Menu disponible</h2>
                            <hr>
                            @forelse ($menus as $menu)
                                
                            <div class=" mt-2 row justify-content-around bg-white rounded" >
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 p-xl-1 p-4">
                                    <img class="img-fluid rounded "  src="{{asset('storage/'.$menu->imagen)}}"  alt="Perfil">
                                 </div>
                                <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12 col-12 p-2 ">
                                    <div class="row p-3">
                                        <h5 class="col-12 pb-2">{{$menu->nombre}}</h5>
                                        <div class=" col-12 m-0 p-0 pl-3">
                                            <h6>Descripcion</h6>
                                            <small class="pt-1"><i> {{$menu->descripcion}}</i></small>
                                        </div>
                                        <div class=" col-12 mt-1 p-0 pl-3">
                                            <small class="m-0"> <strong>Codigo menu</strong></small>
                                            <br>
                                            <small class="m-0">{{$menu->codigo_menu}}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            
                            @empty
                                <h2 class="text-secondary p-5 text-center">Sin sugerencias</h2>
                            @endforelse
                    </div>
                        <!--RESERVAS-->
                        <div class="border-left  bg-white col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12 p-xl-3 p-4 order-xl-2 order-lg-2 order-md-1 order-sm-1  order-1">
                            <h2 class=" pb-2">Reservar</h2>
                            <form class="form-row" action="{{route('booking.store')}}" method="POST">
                                @csrf
                                    <div class="form-group col-6">
                                        <label for="fecha">Fecha</label>
                                        <input class="form-control" type="date" name="fecha" id="fecha">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="cantidad_personas">Cant. personas</label>
                                        <select class="form-control" name="cantidad_personas" id="cantidad_personas">
                                            @for ($i = 1; $i <= 10 ; $i++)
                                            <option value="{{$i}}" >{{$i}}</option>
                                            @endfor
                                        
                                        </select>

                                    </div>
                                    <div class="form-group col-12">
                                        <label for="hora">Hora</label>
                                        <select class="form-control" name="hora" id="hora">
                                            @for ($i = 7; $i <= 23 ; $i++)
                                            <option value="{{$i}}" >{{$i}}:00 Hs</option>
                                            @endfor
                                        
                                        </select>

                                    </div>
                                    <div class="form-group col-12">
                                        <label for="aclaraciones">Aclaraciones</label>
                                        <textarea class="form-control" name="aclaraciones" id="aclaraciones"  rows="5"></textarea>
                                    </div>
                                    <input id="shopName" name="shopName" type="hidden" value="{{$perfil->nombre}}">
                                    <input id="shopId" name="shopId" type="hidden" value="{{$perfil->id}}">
                                    <button class="btn btn-danger form-control" type="submit"> Solicitar</button>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            
            
           </section>
        </div>

        @endsection