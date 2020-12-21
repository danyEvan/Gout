@extends('layouts.dash')
@section('title', 'Gout | Dashboard')
@section('container')

    @can('make bookings')
                    <div class="row  justify-content-center align-items-center">
                        <div class="col-xl-12">
                            <div class="row justify-content-center p-5">
                                <div class="col-sm-6">
                                    <img class="img-fluid p-2 pl-5" src="{{asset('/img/mesa/cara.svg')}}" alt="saludo">
                                </div>
                                <h2 class="col-sm-12 text-center text-secondary pt-5"> Welcome!</h2>
                            </div>
                        </div>

                    </div>
 
    @endcan

    @can('take bookings')
                
                 <div class="row  justify-content-center align-items-center">
                        <div class="col-xl-12">
                            <div class="row justify-content-center mt-5">
                                <div class="col-sm-6">
                                    <img class="img-fluid" src="{{asset('/img/mesa/home1.svg')}}" alt="saludo">
                                </div>
                            <h2 class="col-sm-12 text-center text-secondary pt-4 pb-4 display-4">Welcome! <br> {{ Auth::user()->Shop->nombre}}</h2>
                            </div>
                        </div>
                        
                </div>
    @endcan

@endsection