<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
    <link rel="shortcut icon" href="{{ asset('/img/logo/gout.ico.svg')}}" type="image/x-icon">
    <title>@yield('title')</title>
    
</head>
<body>

    <header class="container-fluid">
        <div class="row p-2 justify-content-center">
            <div class="col-xl-3 col-md-4 col-sm-12 text-center mt-2"> <a href="{{ url('/') }}"> <img src=" {{ asset('/img/logo/gout-logo-img1.png') }}"" height="120" width="120" alt="logo"></a> </div>
            <div class="col-xl-6"></div>
            <div class="col-xl-3 col-sm-12 p-5 d-flex justify-content-center">
                @guest
                    <a class="btn btn-danger" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                    @if (Route::has('register'))
                        <a class="btn btn-danger ml-1" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                    @endif
                @else
                    
                        <a href="{{ url('/home') }}" class="nav-link " >
                            {{ __('Dashboard')}}
                        </a>
                        <a class="btn btn-outline-danger ml-1" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                @endguest
            </div>
        </div>
    </header>

    @can('make bookings')
                <div class="container-fluid pt-2 ">
                    <section class="row justify-content-center pb-5" style="height: auto; width: auto;">
                    
                    <!--DASHBOARD CLIENTE-->
                    <div class="col-xl-11 mt-4  bg-white rounded ">
                        <div class="row justify-content-center">
                            <!--CONTENEDOR OPCIONES-->
                            <div class=" border-right bg-white col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12  p-4 rounded border shadow">
                                <div class="row ">
                                    <div class="col-lg-12 col-sm-6 col-12 pt-3 text-center">
                                        <img class=" rounded-circle border" 
                                        src="@if (Auth::user()->Customer)
                                                {{ asset('storage/'.Auth::user()->Customer->avatar) }}
                                            @else
                                                {{ asset('/img/mesa/dedo.svg') }}
                                            @endif" height="200" width="200" alt="foto">
                                    
                                        <h4 class="text-center pt-3">
                                           @if ( Auth::user()->Customer )
                                                {{ Auth::user()->Customer->nombre}}
                                           @else
                                                {{ Auth::user()->name }}
                                           @endif
                                        </h4>
                                    </div>
                                
                                    <ul class="nav col-lg-12  col-sm-6 col-12 flex-column pt-3 ">
                                    <li class="nav-link"> <a class="btn btn-block border-b" href="{{ route('booking.index')}}"> {{ __('Pendientes')}} </a></li>
                                        <li class="nav-link"> <a class="btn btn-block border-b" href="{{ route('history.index') }}"> {{ __('Historial')}} </a></li>
                                        <li class="nav-link"> <a class="btn btn-block border-b" href="{{ route('Customer.index')}}"> {{ __('Perfil')}} </a></li>
                                    </ul>
                                </div>

                        </div>
            
                        <!--CONTENEDOR RESERVAS-->
                        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 rounded border">
                            @yield('container')
                        </div>
                    
                        </div>
                        </div>
                    </section>
                </div> 
    @endcan

    @can('take bookings')
            <div class="container-fluid pt-3 ">
            <section class="row justify-content-center " style="height: auto; width: auto;">
            
                <!--DASHBOARD COMERCIO-->
                <div class="col-xl-12 bg-white ">
                    <div class="row  p-4">
                    <!--NAV DASHBOARD-->
                    <div class=" bg-white col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12 pb-4 rounded  ">
                        <div class="row shadow pb-2">
                            <div class="col-lg-12 col-sm-6 col-12 pt-3 pb-3 text-center ">
                                <img class=" rounded-circle border border-dark" src="{{ asset('storage/'.Auth::user()->Shop->avatar) }}" height="200" width="200" alt=""{{ Auth::user()->Shop->nombre }}>
                                <h4 class="text-center pt-3">{{ Auth::user()->Shop->nombre }}</h4>
                            </div>

                            <ul class="nav col-lg-12  col-sm-6 col-12 flex-column pt-4" >
                                <li class="nav-link"> <a class="btn btn-block border-b"" href="{{ route('booking.index')}}"> {{ __('Reservas Pendientes')}}</a></li>
                                <li class="nav-link"> <a class="btn btn-block border-b"" href="{{ route('menu.index')}}"> {{ __('Menus')}} </a></li>
                                <li class="nav-link"> <a class="btn btn-block border-b"" href="{{ route('Shop.index')}}"> {{ __('Perfil')}} </a></li>
                            </ul>
                        </div>

                    </div>

                    <!--CONTENEDOR ITEMS DEL MENU DASHBOARD-->
                    <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12 border rounded">
                        @yield('container')
                    </div>
                </div>
            </section>
            </div>
    @endcan



    <div class="container-fluid p-3 pb-4 negro ">
        <section class="row p-3">
            
                <ul class="nav navbar-text col-xl-5 col-md-6 col-sm-12 pb-2">
                    <li class="nav-item"><a class="nav-link text-white" href="#">Quienes somos?</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Registra tu negocio</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Preguntas Frecuentes</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Terminos y Condiciones</a></li>
                </ul>
            
            <div class="col-xl-7 col-md-6 col-sm-12 pt-4 text-center text-white">
                <h5>Seguinos en nuestras redes sociales!</h5>
                <div class="row justify-content-center p-4">
                    <a class="p-4" href="#"><i class="fab fa-twitter fa-2x"></i></a>
                    <a class="p-4" href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                    <a class="p-4" href="#"><i class="fab fa-instagram fa-2x"></i></a>
                </div>
            </div>
            
        </section>
    </div>
    <div class="container-fluid p-1 m-0 negro text-white text-center">
        <hr>
        <small>&#169Gout 2020 Derechos Reservados</small>
    </div>


   
   


    
    <script src="https://kit.fontawesome.com/6a74c4ea9a.js" crossorigin="anonymous"></script>
</body>
</html>
