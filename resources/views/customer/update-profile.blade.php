@extends('layouts.dash')
@section('title', 'Gout | Actualizar datos')
@section('container')

    @can('make bookings')

                    <h2 class="p-4 pt-5">Datos personales</h2>
                    <form action="{{ route('Customer.update', ['Customer'=> $customer->id]) }}" method="POST"  enctype="multipart/form-data" class="pt-2 pr-5 pl-5 pb-3">
                        @method("PATCH")
                        @csrf
                                
                                  
                                  <div class="form-row pt-4">
                                      <div class="col-md-6 mb-5">
                                        <label for="validationDefault01">Nombre/s</label>
                                        <input type="text" class="non form-control" id="validationDefault01"  name="nombre" value="{{$customer->nombre}}" required>
                                      </div>
                                      <div class="col-md-6 mb-5">
                                        <label for="validationDefault02">Apellido/s</label>
                                        <input type="text" class="non form-control" id="validationDefault02"  name="apellido" value="{{$customer->apellido}}" required>
                                      </div>
                                  </div>
                                  <div class="form-row pt-1">
                                    <div class="col-md-12 mb-5">
                                      <label for="validationDefault03">Direccion</label>
                                      <input type="text" class="non form-control" id="validationDefault03" name="direccion" value="{{$customer->direccion}}" required>
                                    </div>
                                    
                                  </div>
                                  <div class="form-row pt-1">
                                    <div class="col-md-4 mb-5">
                                      <label for="validationDefault04">Provincia</label>
                                      <input type="text" class="non form-control" id="validationDefault04" name="provincia" value="{{$customer->provincia}}" required>
                                    </div>
                                    <div class="col-md-4 mb-5">
                                        <label for="validationDefault05">Localidad</label>
                                        <input type="text" class="non form-control" id="validationDefault05" name="localidad" value="{{$customer->localidad}}" required>
                                    </div>
                                    <div class="col-md-4 mb-5">
                                      <label for="validationDefault06">Telefono</label>
                                      <input type="text" class="non form-control" id="validationDefault06" name="telefono" value="{{$customer->telefono}}" required>
                                    </div>
                                    <div class="col-md-12 mb-5">
                                      <label for="avatar">Avatar</label><br>
                                      <input class="p-1 pl-1" type="file" id="avatar"   name="avatar">
                                    </div>
                                  </div>

                                  <div class="row justify-content-center pb-4">
                                      <button class="btn btn-danger  mr-1" type="submit">Actualizar</button>
                                      <a href="{{ route('Customer.index') }}" class="btn btn-outline-dark ml-1" type="submit">Cancelar</a>
                                  </div>
                                  
                    </form>
                   
             
    @endcan


@endsection