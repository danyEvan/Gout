@extends('layouts.app')
@section('title', 'Gout | Crear comercio')

@section('container')

<div class="container-fluid">
    <section class="row createCommerce justify-content-left align-content-end" style="height: 40rem; width: auto;">
        <div class="col-sm-6 p-5 boxCommerce mb-3 ml-3">
            <h1 class="text-white text-left">Organiza tu negocio</h1>
            <p class="text-white">Saber quien te va a visitar te ayuda a tener todo bajo control. <br> 
                Tanto para organizarte mejor, como para verificar que tu lugar cumple con cualquier solicitud.</p>
        </div>
    </section>
</div>


<div class="container mt-2 pt-2 mb-5">
    <hr>
    <section class="row">
        <div class="col-sm-6 pt-5 pr-5 pl-4 pb-4 border border-dark">
          <img class="img-fluid" src="/img/real/commerce1.jpg" alt="cafeteria">
        </div>
        <div class="col-sm-6 pl-5 pr-4 d-flex align-items-center">
            <div>
                <h2 class="p-2">Centrate en la calidad</h2>
                <p class="p-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem similique omnis maxime ex magni delectus, incidunt sequi error quisquam magnam.</p>
    
            </div>
        </div>
    </section>
</div>

<div class="container mt-2 pt-2 mb-5">
    <hr>
    <section class="row">
        <div class="col-sm-6 pt-5 pr-4 pl-5 pb-4 border border-dark order-xl-2 order-lg-2 order-sm-2">
          <img class="img-fluid" src="/img/real/commerce2.jpg" alt="cafeteria">
        </div>
        <div class="col-sm-6 pr-5 pl-4 d-flex align-items-center order-xl-1 order-lg-1 order-sm-1">
            <div>
                <h2 class="p-2">Brinda el mejor servicio</h2>
                <p class="p-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem similique omnis maxime ex magni delectus, incidunt sequi error quisquam magnam.</p>
    
            </div>
        </div>
    </section>
</div>
@can('make bookings')
<div class="container-fluid mt-2 mb-5 pt-2 createCommerce2 ">
    <section>
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <h2 class="text-center text-white display-4 p-3">Asocia tu comercio hoy</h2>
            </div>
            <div class="col-xl-8 col-sm-12">
            <form method="POST"  enctype="multipart/form-data" action="{{ route('Shop.store') }}"  class="mb-4 p-4 bg-white rounded">
                @csrf
                    <div class="form-row">
                      <div class="col-md-12 mb-4">
                        <label for="validationDefault01">Nombre del comercio</label>
                        <input type="text" class="non form-control" id="validationDefault01" name="nombre" required>
                      </div>  
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-4">
                            <label for="validationDefault02">Direccion</label>
                            <input type="text" class="non form-control" id="validationDefault02" name="direccion" required>
                        </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-3 mb-4">
                        <label for="validationDefault03">Provincia</label>
                        <input type="text" class="non form-control" id="validationDefault03" name="provincia" required>
                      </div>
                      <div class="col-md-5 mb-4">
                        <label for="validationDefault04">Localidad</label>
                        <input type="text" class="non form-control" id="validationDefault04" name="localidad" required>
                      </div>
                      <div class="col-md-4 mb-4">
                        <label for="validationDefault05">Telefono</label>
                        <input type="text" class="non form-control" id="validationDefault05" name="telefono" required>
                      </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-5 mb-4">
                          <label for="validationDefault06">Capacidad</label>
                          <input type="text"  class="non form-control" id="validationDefault06" name="capacidad" required>
                          </div>
                        <div class="col-md-7 mb-4">
                          <label for="validationDefault07">Dias y Horarios</label>
                          <input type="text"  class="non form-control" id="validationDefault07" name="dias_horarios" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
        
                        <div class="col-md-12 ">
                            <label  for="validationDefault08">Reseña</label>
                            <textarea class="form-control"  id="validationDefault08" name="reseña" cols="30" rows="5"></textarea>
                        </div>

                     
                    </div>
                    <div class="form-row">
                        <div class="col-md-3 mt-4">
                            <label for="avatar">Avatar</label>
                            <input class="p-1 pt-2" name="avatar" type="file" accept="image/*" id="avatar" >
                        </div>
                    </div>
                    
                    <div class="form-row justify-content-center pt-5 pb-3">
                        <button class="btn btn-danger" type="submit">Cambiar a Cuenta comercio</button>
                    </div>
            </form>
            </div>
        </div>
        

        
    </section>
</div>
@endcan

@can('take bookings')
<div class="container-fluid mt-5 mb-5 pt-5 pb-5 createCommerce2 ">
    <section>
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <h2 class="text-center text-white  p-3 display-4">Dentro de poco vamos a agregar mas funcionalidades para que tu comercio pueda crecer aun mas!</h2>
            </div>
            <div class="col-sm-12 mt-5">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-12 mt-2">
                        <div class="card shadow p-3" ">
                            <img src="{{ asset('/img/Iconos1/Paper plane Message.svg')}}" class="card-img-top p-5 " alt="message">
                            <div class="card-body">
                              <p class="card-text text-center">Mensajeria instantanea para consultas</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-12 mt-2">
                        <div class="card shadow p-3" >
                            <img src="{{ asset('/img/Iconos1/Reviews.svg')}}" class="card-img-top p-5 " alt="review">
                            <div class="card-body">
                              <p class="card-text text-center">Sistema de calificaciones y comentarios</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-12 mt-2">
                        <div class="card shadow p-3" >
                            <img src="{{ asset('/img/Iconos1/Shipping.svg')}}" class="card-img-top p-5 " alt="car">
                            <div class="card-body">
                              <p class="card-text text-center">Integracion de sistema delivery</p>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        

        
    </section>
</div>
@endcan

    
@endsection