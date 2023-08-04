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
              <p class="card-text">{{ $bar->description }}</p>
            </div>
          </div>
        </div>

        </div>
        <div class="d-flex justify-content-around">
            <form method="POST" action="{{ route ('bars.delete', $bar->id) }}" onsubmit="return confirmar ('¿Estás seguro de borrar este bar?', 'Aviso');">
                @csrf
                <!-- Cross-Site Request Forgery -->
                <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
            <a href="{{ route ('bars.edit', $bar->id) }}" class="btn btn-warning">Editar</a>
            <a href="{{ route ('bars.index') }}" class="btn btn-primary">Volver</a>
        </div>

@endsection
