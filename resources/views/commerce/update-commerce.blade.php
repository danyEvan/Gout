@extends('layouts.dash')
@section('title', 'Gout | Modificar datos')
@section('container')


    @can('take bookings')
                <h2 class="p-4 text-left">Modificar datos</h2>
        <form action="{{ route('Shop.update', ['Shop'=> $shop->id ])}}" enctype="multipart/form-data" method="POST" class="p-4">
                    @method('PUT')
                    @csrf
                    <div class="form-row">
                      <div class="col-md-12 mb-4">
                        <label for="validationDefault01">Nombre del comercio</label>
                        <input type="text" class="non form-control" id="validationDefault01" name="nombre" value=" {{$shop->nombre}}" required>
                      </div>  
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-4">
                            <label for="validationDefault02">Direccion</label>
                            <input type="text" class="non form-control" id="validationDefault02" name="direccion" value=" {{$shop->direccion}}" required>
                        </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-3 mb-4">
                        <label for="validationDefault03">Provincia</label>
                        <input type="text" class="non form-control" id="validationDefault03" name="provincia" value="{{$shop->provincia}} " required>
                      </div>
                      <div class="col-md-5 mb-4">
                        <label for="validationDefault04">Localidad</label>
                        <input type="text" class="non form-control" id="validationDefault04" name="localidad" value=" {{$shop->localidad}}" required>
                      </div>
                      <div class="col-md-4 mb-4">
                        <label for="validationDefault05">Telefono</label>
                        <input type="text" class="non form-control" id="validationDefault05" name="telefono" value="{{$shop->telefono}} " required>
                      </div>
                    </div>
      
                    <div class="form-row">
                        <div class="col-md-5 mb-4">
                          <label for="validationDefault06">Capacidad</label>
                          <input type="text"  class="non form-control" id="validationDefault06" name="capacidad" value=" {{$shop->capacidad}}" required>
                          </div>
                        <div class="col-md-7 mb-4">
                          <label for="validationDefault07">Dias y Horarios</label>
                          <input type="text"  class="non form-control" id="validationDefault07" name="dias_horarios" value="{{$shop->dias_horarios}} " required>
                        </div>
                    </div>
                    
                    <div class="form-row">
        
                        <div class="col-md-12 "> 
                            <label  for="validationDefault08">Reseña</label>
                            <textarea class="form-control"  id="validationDefault08" name="reseña" cols="30" rows="5">{{$shop->reseña}}</textarea>
                        </div>

                     
                    </div>
                    <div class="form-row">
                        <div class="col-md-3 mt-4">
                            <label for="avatar">Avatar</label>
                            <input class="p-1 pt-2" name="avatar" type="file" id="avatar" >
                        </div>
                    </div>

                    <div class="form-row justify-content-center pt-5">
                        <button class="btn btn-danger pl-4 pr-4" type="submit">Aceptar</button>
                        <a class="btn btn-outline-dark ml-1" href="{{route('Shop.index')}}">Cancelar</a>
                    </div>
                    
        </form>
                
    @endcan

@endsection