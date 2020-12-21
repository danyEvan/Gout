@extends('layouts.app')
@section('title', 'Gout | Listado')
@section('container')
<nav class="nav bg-dark  p-0 m-0 pl-4">
  <p class="text-white p-0 m-0"> <strong class="ml-3 p-0">
    @if (count($negocios) == 0)
        {{ "No se encontraron resultados" }}
    @else
        @if (count($negocios) == 1)
            {{ count($negocios)."  resultado" }}
        @else
          {{ count($negocios)." resultados" }}
        @endif
    @endif
  
  </strong></p>
</nav>


<div class="container-fluid">
  <section class="row fondo5 justify-content-around p-2" style="height: auto; width: auto;">
  @forelse ($negocios as $negocio)
    
      <div class="card  col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 m-3 mt-5 shadow" >
          <img class="card-img-top rounded-circle p-3 mt-2" src="{{asset('storage/'.$negocio->avatar)}}" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title p-0 m-0">{{ $negocio->nombre }}</h5>
            <p class="card-text p-0 mt-1 mb-4 ">{{ $negocio->localidad }}</p>
            
            <a href="{{ route('profile.profile', $negocio->id)}}" class="btn btn-danger mt-1">Ver Mas</a>
          </div>
      </div>
     
    

    @empty
    
      <div class="card col-xl-6 col-lg-8  col-sm-12  col-12 p-5  m-3 mt-4 text-center" >
          <img  src="{{asset('/img/Iconos1/No Results.svg')}}" height="150" alt="not found">
          <h2 class="pt-5"> No se encontraron resultados </h2>
          <div class= "mt-3">
            <a  class="btn btn-danger inline" href="{{ url('/') }}"> Volver</a>
          </div>
      
        </div>
     
    
      @endforelse
    </section>
</div>


@endsection