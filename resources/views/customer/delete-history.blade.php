@extends('layouts.dash')
@section('title', 'Gout | Eliminar historial')
@section('container')


    @can('make bookings')
    <h3 class="pt-4 pl-4 text-left">Eliminar historial</h3>
    <hr>
    <div class="row justify-content-center mt-5">
        
        <form action="{{ route('history.destroy', ['history' => "delete-all-history" ] )}}" method="POST" class="mt-5 col-xl-8">
            @method('DELETE')
            @csrf
            <div class="">
                <h4 class="text-secondary text-center">¿Desea continuar?</h4>

                <div class="form-row justify-content-center pt-5">
                    <button class="btn btn-danger pl-3 pr-3" type="submit">Aceptar</button>

                    <a class="btn btn-outline-dark ml-1" href="{{route('booking.index')}}">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
               
                
    @endcan

@endsection