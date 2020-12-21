@extends('layouts.app')
@section('title', 'Gout | Home')
@section('container')


    <div class="container-fluid">
        <section class="row fondo justify-content-center align-content-center" style="height: 43rem; width: auto;">
            <form class=" col-xl-10 col-lg-10 col-md-10 col-sm-10 col-12 p-3 pt-2 bg-white rounded" action="{{ Route('search.negocio')}}" method="GET">
                <div class=" row justify-content-center">
                    <div class="form-group col-xl-7 col-lg-6 col-sm-12 col-12">
                        <label for="buscar">Lugar</label>
                        <input type="text" name="buscar" id="" class="form-control" placeholder="¿A donde vas?" >
        
                    </div>
                   
                    <div class="form-group col-xl-2 col-lg-6 col-md-6 col-sm-12 col-12">
                        <label for="localidad">Provincia</label>
                        <select class="form-control" name="provincia" id="provincia" placeholder="provincia">
                        
                            
                                <option >  </option>
                                <option value="Buenos Aires">Buenos Aires</option>
                                <option value="Catamarca">Catamarca</option>
                                <option value="Chaco">Chaco</option>
                                <option value="Catamarca">Catamarca</option>
                                <option value="Chubut">Chubut</option>
                                <option value="Catamarca">Catamarca</option>
                                <option value="Córdoba">Córdoba</option>
                                <option value="Catamarca">Catamarca</option>
                                <option value="Entre Ríos">Entre Ríos</option>
                                <option value="Formosa">Formosa</option>
                                <option value="Jujuy">Jujuy</option>
                                <option value="La Pampa">La Pampa</option>
                                <option value="La Rioja'">La Rioja'</option>
                                <option value="Mendoza">Mendoza</option>
                                <option value="Misiones">Misiones</option>
                                <option value="Neuquén">Neuquén</option>
                                <option value="Río Negro">Río Negro</option>
                                <option value="Salta">Salta</option>
                                <option value="San Juan">San Juan</option>
                                <option value="San Luis">San Luis</option>
                                <option value="Santa Cruz">Santa Cruz</option>
                                <option value="Santa Fe">Santa Fe</option>
                                <option value="Santiago del Estero">Santiago del Estero</option>
                                <option value="Tierra del Fuego">Tierra del Fuego</option>
                                <option value="Tucumán">Tucumán</option>


                           
                          </select>
                    </div>
                
                    <div class=" col-xl-2 col-sm-12 pt-4 mt-1 text-center">
                        <button class="btn btn-danger  pr-3 pt-2 pl-3 " type="submit">Buscar <i class="fas fa-search ml-2"></i></button>
                    </div>
                 </div>
        </form>
       </section>
    </div>



    <div class="container mt-5">
        
        <h2 class="display-4"> <i> Con Gout </i></h2>
        <section class="row p-2">
                <img class="col-xl-6 col-12 img-fluid" src="./img/mesa/home2.svg" alt="reserva">
                <div class="col-xl-6 col-12 p-3">
                    <h2 class="p-2 ">Reserva donde quieras</h2>
                    <p class="p-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum laudantium laborum natus eveniet ex ipsa voluptates iure, officiis rerum! Officiis, quam! Minima aut quod quidem repudiandae autem, fugiat eos animi.
                    </p>
                </div>
        </section>
        <hr>

        <section class="row p-2">
                <div class="col-xl-6 col-12 p-3 order-xl-1 order-2">
                    <h2 class="p-2">A la hora mas conveniente</h2>
                    <p class="p-3">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum laudantium laborum natus eveniet ex ipsa voluptates iure, officiis rerum! Officiis, quam! Minima aut quod quidem repudiandae autem, fugiat eos animi.
                    </p>
                </div>
        <img class="col-xl-6 col-12 img-fluid order-xl-2 order-1" src="./img/mesa/home1.svg" alt="reserva">
        
        </section>
        <hr>

    </div>
    <div class="container mt-5 pt-5 mb-5">
        <h2 class="text-center pb-5">Facil y Rapido</h2>
        
        <div class="row justify-content-around">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12 border rounded p-3 mt-2">
                
                    <img class="card-img-top p-3" src="./img/Iconos1/Searching.svg" height="150" width="150" alt="Busca">
                    <div>
                      <p class=" text-center">Busca tu lugar</p>
                    </div>
                
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12 border rounded p-3 mt-2">
               
                    <img class="card-img-top p-3" src="./img/Iconos1/Unsubscribed.svg" height="150" width="150" alt="Elegi">
                    <div >
                      <p class=" text-center">Elegi el dia</p>
                    </div>
                  
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12 border rounded p-3 mt-2">
                
                    <img class="card-img-top p-3" src="./img/Iconos1/Waiting.svg" height="150" width="150" alt="ahorraTiempo">
                    <div>
                      <p class=" text-center">Ahorra tiempo</p>
                    </div>
                  
            </div>
        </div>
    </div> 
    <div class="container pt-5 pb-5">
        <section class="row m-5">
        <img class="col-xl-6 col-lg-6 col-sm-6 col-12 img-fluid " src="/img/svgs/Chef.svg" alt="reserva">
            <div class="col-xl-6 col-12 p-3">
                <h2 class="p-2 mt-5">Si tenes un comercio registralo gratis!</h2>
                <p class="p-3 mt-3">
                    Sin costos, ni ahora, ni nunca!
                </p>
                <div class="text-left pl-3">
                <a href="{{ route('Shop.create')}}" class="btn btn-danger ">Ver mas</a>
                </div>
            
            </div>
        
        </section>
    </div>
    <div class="container-fluid " >
        <section class="row fondo2 justify-content-center align-content-center" style="height: 25rem; width: auto;">
            <form class=" col-xl-7 col-lg-10 col-md-8 col-sm-10 col-12 p-4  bg-white rounded" action="#" method="POST">
                <div class=" row justify-content-center">
                    <div class="form-group col-xl-10 col-md-10 col-sm-10 col-12">
                        <label for="newsletter">Subcribete para recibir mas noticias!</label>
                        <input type="email" name="newsletter" id="newsletter" class="form-control" placeholder="Ingresar email" >
        
                    </div>
                    
                    <div class=" col-xl-2 col-md-2 col-sm-2 col-12 mt-4 p-2 text-center">
                        <button class="btn btn-danger" type="submit">Enviar</button>
                    </div>
                 </div>
        </form>
       </section>
        
    </div>

@endsection
