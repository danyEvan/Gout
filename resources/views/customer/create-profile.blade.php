@extends('layouts.dash')
@section('title', 'Gout | Datos personales')
@section('container')

    @can('make bookings')

                
    <form action="{{ route('Customer.store') }}" method="POST" enctype="multipart/form-data" class="pt-5 pr-5 pl-5 pb-3">
                      @csrf
                        <h2 class="pb-4">Datos personales</h2>
                        <div class="form-row pt-4">
                          <div class="col-md-6 mb-5">
                            <label for="validationDefault01">Nombre/s</label>
                            <input type="text" class="non form-control" id="validationDefault01"  name="nombre" required>
                          </div>
                          <div class="col-md-6 mb-5">
                            <label for="validationDefault02">Apellido/s</label>
                            <input type="text" class="non form-control" id="validationDefault02"  name="apellido" required>
                          </div>
                        </div>
                        <div class="form-row pt-1">
                          <div class="col-md-12 mb-5">
                            <label for="validationDefault03">Direccion</label>
                            <input type="text" class="non form-control" id="validationDefault03" name="direccion" required>
                          </div>
                          
                        </div>
                        <div class="form-row pt-1">
                          <div class="col-md-4 mb-5">
                            <label for="validationDefault04">Provincia</label>
                            <input type="text" class="non form-control" id="validationDefault04" name="provincia" required>
                        </div>
                        <div class="col-md-4 mb-5">
                            <label for="validationDefault05">Localidad</label>
                            <input type="text" class="non form-control" id="validationDefault05" name="localidad" required>
                        </div>
                        <div class="col-md-4 mb-5">
                          <label for="validationDefault06">Telefono</label>
                          <input type="text" class="non form-control" id="validationDefault06" name="telefono" required>
                      </div>
                        </div>
                         <div class="form-row pt-1">
                            <div class="col-md-3 mb-5">
                                <label for="validationDefault07">Avatar</label><br>
                                <input class="p-1 pl-1" type="file" id="validationDefault07" name="avatar">
                            </div>
                        </div> 
                        <div class="form-row justify-content-center pb-4">
                            <button class="btn btn-danger pl-4 pr-4 " type="submit">Enviar</button>
                        </div>
                        
    </form>
                   
             
    @endcan



@endsection