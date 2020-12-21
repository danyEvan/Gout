<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
    <link rel="shortcut icon" href="{{ asset('/img/logo/gout.ico.svg')}}" type="image/x-icon">
    <title>Gout | Sing In</title>
    
</head>
<body class="createCommerce2">

    <div class="container-fluid mt-5 pt-5 pb-5">
        <div class="row justify-content-center ">
            <div class="col-xl-5 col-lg-8 col-md-8 col-sm-10 col-12 mt-3">
                <div class="shadow p-3 rounded border bg-white">
                    
                        <div class="col-sm-12 text-center pt-4">
                            <img src=" {{ asset('/img/logo/gout-logo-img1.png') }}"" height="150" width="150" alt="logo">
                            <p class="pt-1">Pour les gens de bon goût</p>
                        </div>
                   
                     
                    

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="email" class=" col-form-label ">{{ __('E-Mail') }}</label>
                                    <input id="email" type="email"
                                           class="non form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="password"
                                       class=" col-form-label ">{{ __('Contraseña') }}</label>
                                    <input id="password" type="password"
                                           class="non form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="">
                                    <div class="form-check ml-3 ">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Recordar usuario') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0 ">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-danger">
                                        {{ __('Iniciar sesion') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                    <div class="col-12">
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            <small>{{ __('Olvidaste la contraseña?') }}</small>
                                        </a>
                                    </div>
                                        
                                    @endif

                                    
                                </div>
                                <div class="col-md-12 text-center ">
                                    <small><a class="nav-link pt-4" href="{{ route('register') }}">{{ __('¿No tenes cuenta?') }} <br> {{ __('Registrate') }}</a></small>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/6a74c4ea9a.js" crossorigin="anonymous"></script>
</body>
</html>