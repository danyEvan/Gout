@extends('layouts.dash')
@section('title', 'Gout | Actualizar reserva')
@section('container')


    @can('take bookings')
    <h3 class="pt-4 pl-4 text-left">Actualizar reserva</h3>
    <hr>
    <div class="row justify-content-center mt-5">
        
        <form action="{{ route('booking.update', ['booking'=> $reserva->id ])}}" method="POST" class="mt-5 col-xl-8">
                    @method('PUT')
                    @csrf
                    <div class="">
                        <h4 class="text-secondary text-center">Para dar concluida la reserva haga click en "Aceptar".</h4>
                        <input id="verdadero" name="verdadero" type="hidden" value="{{true}}">
                        <div class="form-row justify-content-center pt-5">
                            <button class="btn btn-danger pl-4 pr-4" type="submit">Aceptar</button>
                            <a class="btn btn-outline-dark ml-1" href="{{route('booking.index')}}">Cancelar</a>
                        </div>
                    </div>
                   
                    
        </form>
    </div>
               
                
    @endcan

@endsection