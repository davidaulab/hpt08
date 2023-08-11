@extends ('layouts.layout')

@section ('content')


<h1 class="text-center">Detalle de vino</h1>





        <x-flash-message code="{{ Session::get ('code') }}" message="{{ Session::get ('message') }}"/>

    <div  class="row  d-flex justify-content-center">
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
           
            </div>
          </div>
        </div>

    </div>    


        <div class="d-flex justify-content-around">
            @auth
            <form method="POST" action="{{ route ('wine.destroy', $wine->id) }}" onsubmit="return confirmar ('¿Estás seguro de borrar este vino?', 'Aviso');">
                @method('DELETE')
                @csrf
                <!-- Cross-Site Request Forgery -->
                <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
            <a href="{{ route ('wine.edit', $wine->id) }}" class="btn btn-warning">Editar</a>
            @endauth
        <a href="{{ route ('wine.index') }}" class="btn btn-primary">Volver</a>

        </div>

@endsection