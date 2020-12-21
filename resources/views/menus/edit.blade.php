@extends('layouts.dash')
@section('title', 'Gout | Editar menu')
@section('container')

    @can('take bookings')

                <h2 class="pl-3 pb-2 mt-5 text-left">Editar menu </h2>
                <form action="{{ route('menu.update', ['menu' => $menu->id ])}}" method="POST" enctype="multipart/form-data" class="p-4">
                          @method('PUT')
                          @csrf
                              <div class="form-row">
                                <div class="col-md-6 mb-4">
                                  <label for="validationDefault01">Nombre</label>
                                  <input type="text" class="non form-control" id="validationDefault01" name="nombre"  value="{{ $menu->nombre }}" required>
                                </div>  
                                <div class="col-md-6 mb-4">
                                  <label for="validationDefault02">Codigo de menu</label>
                                  <input type="text" class="non form-control" id="validationDefault02" name="codigo_menu"  value="{{ $menu->codigo_menu }}" required>
                                </div>
                            
                              </div>
                              <div class="form-row">
                            
                                  <div class="col-md-12 ">
                                      <label  for="validationDefault03">Descripcion</label>
                                      <textarea class="form-control"  id="validationDefault03" cols="30" rows="5" name="descripcion">{{ $menu->descripcion }}</textarea>
                                  </div>
                                 <div class="col-md-3 mt-4">
                                      <label for="validationDefault04">Imagen</label><br>
                                      <input class="p-1 pt-2" type="file" id="validationDefault04" name="imagen">
                                  </div>
                              
                              </div>
                              <div class="row justify-content-center pt-5">
                                  <button class="btn btn-danger pl-3 pr-3 mr-1" type="submit">Aceptar</button>
                                  <a class="btn btn-outline-dark ml-1" href="{{ route('menu.index')}}">Cancelar</a>
                              </div>

                </form>

                
    @endcan

@endsection