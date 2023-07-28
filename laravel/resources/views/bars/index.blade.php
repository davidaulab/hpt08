@extends('layouts.layout')

@section ('title', 'Listado de bares')

@section('content')
        <h1>Listado de bares</h1>



       

        <x-flash-message code="{{ Session::get ('code') }}" message="{{ Session::get ('message') }}"/>

        <div  class="row">
        @foreach ($bares as $key => $bar)
        <div class="col-4 py-2 d-flex align-items-stretch" >
          <div class="card w-100" >
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $bar[1] }}</h5>
              <p class="card-text">{{ $bar[2] }}

            </p>
              <a href="{{ route ('bars.show', $bar[0]) }}" class="btn btn-primary">Ver</a>
            </div>
          </div>
        </div>

        @if (($key % 3) == 2)
    </div>
    <div  class="row">
        @endif
        @endforeach
        </div>



@endsection
