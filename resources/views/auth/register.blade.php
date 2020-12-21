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

    <div class="container-fluid  mt-5 ">
        
        <div class="row justify-content-center pt-5 pb-5">
            <div class="col-xl-5 col-lg-8 col-md-8 col-sm-10 col-12 mt-3">
                <div class="shadow p-3 rounded border bg-white">
                    
                        <div class="col-sm-12 text-center pt-4">
                            <img src=" {{ asset('/img/logo/gout-logo-img1.png') }}"" height="150" width="150" alt="logo">
                            <p class="pt-1">Pour les gens de bon goût</p>
                        </div>
                   
                     
                    

                    <div class="card-body">
                        <form class=" mt-2" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="name" class="">{{ __('Nombre de usuario') }}</label>
                                    <input id="name" type="text" class="non form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="email" >{{ __('E-Mail') }}</label>
                                    <input id="email" type="email" class="non form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="password" class="">{{ __('Contraseña') }}</label>
                                    <input id="password" type="password" class="non form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row ">
                                <div class="col-md-12">
                                    <label for="password-confirm" class="">{{ __('Confirmar contraseña') }}</label>
                                    <input id="password-confirm" type="password" class="non form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 mt-4 text-center">
                                    <button type="submit" class="btn btn-danger mb-0">
                                        {{ __('Registrar cuenta') }}
                                    </button>
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