@extends ('layouts.layout')

@section ('content')


<h1>Listado de vinos</h1>





        <x-flash-message code="{{ Session::get ('code') }}" message="{{ Session::get ('message') }}"/>

        <div  class="row">
        @foreach ($wines as $key => $wine)
        <div class="col-4 py-2 d-flex align-items-stretch" >
          <div class="card w-100" >
            @if (isset($wine->image) && ($wine->image != ''))
            <img src="{{ $wine->image}}" class="card-img-top" alt="{{ $wine->name }}">
            @else
            <img src="{{ asset('img/logo.png')}}" class="card-img-top" alt="{{ $wine->name }}">
            @endif

            <div class="card-body">

              <h5 class="card-title">{{ $wine->name }}</h5>
              <p class="card-text">{{ $wine->description}}

            </p>
              <a href="{{ route ('wine.show', $wine->id ) }}" class="btn btn-primary">Ver</a>
            </div>
          </div>
        </div>

        @if (($key % 3) == 2)
    </div>
    <div  class="row">
        @endif
        @endforeach
        </div>

        <div class="d-flex justify-content-center p-4">

        @auth
        <a href="{{ route ('wine.create')}}" class="btn btn-primary">Nuevo vino</a>
        @else
            <p>Solamente los usuarios registrados pueden crear nuevos vinos<br>
            <a href="{{ route('register') }}">Date de alta ahora</a>
            </p>
        @endauth
        </div>

@endsection