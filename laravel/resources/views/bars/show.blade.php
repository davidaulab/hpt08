@extends ('layouts.layout')

@section('title', 'Ver Bar')

@section ('content')
        <h1 class="text-center">Ver Bar</h1>


        <div  class="row  d-flex justify-content-center">

        <div class="col-4 py-2">
          <div class="card" >
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $bar[1] }}</h5>
              <p class="card-text">{{ $bar[2] }}</p>
            </div>
          </div>
        </div>

        </div>
        <div class="text-center"> <a href="{{ route ('bars.index') }}" class="btn btn-primary">Volver</a></div>

@endsection
