@extends ('layouts.layout')

@section('title', 'Ver Bar')

@section ('content')
        <h1 class="text-center">Ver Bar</h1>


        <div  class="row  d-flex justify-content-center">

        <div class="col-8 py-2">
          <div class="card" >
            <img src="{{ $bar->image}}" class="card-img-top" alt="{{ $bar->name }}">
            <div class="card-body">
              <h5 class="card-title">{{ $bar->name }}</h5>
             @isset($bar->user)
              <h6 class="card-text" style="font-size: 0.7em">Propuesta de: 
              <a href="{{ route('bars.proposals', $bar->user) }}">{{ $bar->user->name}}</a></h6>
              @endisset
              <p class="card-text">{{ $bar->description }}</p>
            </div>
          </div>
        </div>

        </div>
        <div class="d-flex justify-content-around">
            @auth
            @if (isset($bar->user) && (Auth::user()->id == $bar->user->id))
            <form method="POST" action="{{ route ('bars.delete', $bar->id) }}" onsubmit="return confirmar ('¿Estás seguro de borrar este bar?', 'Aviso');">
                @csrf
                <!-- Cross-Site Request Forgery -->
                <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
            <a href="{{ route ('bars.edit', $bar->id) }}" class="btn btn-warning">Editar</a>
            @endif
            @endauth
            <a href="{{ route ('bars.index') }}" class="btn btn-primary">Volver</a>
        </div>

@endsection
