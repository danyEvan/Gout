@extends('layouts.dash')
@section('title', 'Gout | Historial')
@section('container')

    @can('make bookings')
            <header class="row p-1 justify-content-between align-items-center">
                <div class="col-sm-7 ">
                    <h2 class="col-sm-8 text-xl-left text-sm-left text-center pl-3 pb-1 pt-4 text-left">Historial</h2>
                </div>
                <div class="col-sm-3 text-center pb-1 pt-4">
                    <a href="{{route('history.show', ['history'=> 'delete-all-history' ])}}" class="btn btn-danger  btn-sm">Eliminar Historial</a>
                </div>
            </header>
    
    <!--ITERABLE-->
    
            <div class="table-responsive-sm ">
                <table class="table">
                <thead class="thead-dark ">
                  <tr>

                    <th scope="col">Comercio</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Cantidad</th>
                  

                  </tr>
                </thead>
                <tbody>
                  @forelse ($reservaTerminada as $reserva)
                  <tr>

                    <td>{{ $reserva->nombre_comercio }}</td>
                    <td>{{ $reserva->fecha }}</td>
                    <td>{{ $reserva->hora.":00 Hs"}}</td>
                    <td>{{ $reserva->cantidad_personas." personas" }}</td>
                  
                  </tr>
                  
                  @empty
                    <td class="text-secondary">No existen registros disponibles.</td>
                  @endforelse
                  

                </tbody>
              </table>
            </div>
             
    @endcan

@endsection