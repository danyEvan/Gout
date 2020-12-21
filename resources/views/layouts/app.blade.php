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
            <div class="col-xl-3 col-md-4 col-sm-12 text-center mt-2"> <a href="{{ url('/') }}"> <img src=" {{ asset('/img/logo/gout-logo-img1.png') }}"" height="120" width="120" alt="logo"></a> <br> </div>
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
@yield('container')

    <div class="container-fluid p-3 pb-4 negro ">
        <section class="row p-3">
            
                <ul class="nav navbar-text col-xl-5 col-md-6 col-sm-12 pb-2">
                    <li class="nav-item"><a class="nav-link text-white" href="#">Quienes somos?</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Registra tu negocio</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Preguntas frecuentes</a></li>
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