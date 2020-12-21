@extends('layouts.dash')
@section('title', 'Gout | Elminar menu')
@section('container')

    @can('take bookings')

                <h2 class="pl-3 pb-2 mt-5 text-left">Eliminar</h2>
                <form action="{{ route('menu.destroy', ['menu' => $menu->id ])}}" method="POST" enctype="multipart/form-data" class="p-5">
                          @method('DELETE')
                          @csrf
                          <fieldset class="pb-5" disabled="disabled">
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
                          </fieldset>
                          <h5 class="text-center text-secondary pt-5 mt-5">¿Desea continuar?</h5>
                              <div class="row justify-content-center pt-3 ">
                                  <button class="btn btn-danger pl-3 pr-3 mr-1" type="submit">Aceptar</button>
                                  <a class="btn btn-outline-dark ml-1" href="{{ route('menu.index')}}">Cancelar</a>
                              </div>

                </form>

                
    @endcan

@endsection