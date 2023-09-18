@extends ('layouts.app')

@section ('content')

<h1 class="text-center">Listado de proyectos</h1>
<a href="{{route('project.create')}}" class="btn btn-primary my-4" >Nuevo proyecto</a>
<div class="d-flex row">
@foreach ($projects as $project)
<div class="col-sm-4">
<div class="card " >
  <img src="{{$project->image}}" class="card-img-top" alt=".."">
  <div class="card-body">
    <h5 class="card-title">{{$project->name}}</h5>
    <p class="card-text">{{$project->description}}</p>
    <a href="{{route('project.show', $project)}}" class="btn btn-primary">Ver</a>
</div>
</div>
</div>

@endforeach
</div>
@endsection