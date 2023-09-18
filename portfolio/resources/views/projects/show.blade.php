@extends ('layouts.app')

@section ('content')

<h1 class="text-center">Detalle de proyecto</h1>
<div class="d-flex row justify-content-around">
<div class="col-sm-4">
<div class="card " >
  <img src="{{$project->image}}" class="card-img-top" alt=".."">
  <div class="card-body">
    <h5 class="card-title">{{$project->name}}</h5>
    <p class="card-text">{{$project->description}}</p>
    <div class="d-flex row justify-content-around">
        @foreach ($project->teches as $tech)
        <div class="col-1"><a href="{{$project->url}}" target="_blank" title="{{$tech->name}}">{!!$tech->image!!}</a></div>
            
        @endforeach    
       
    </div>
    <div class="d-flex row justify-content-around">
        @if ($project->url != '')
        <div class="col-1"><a href="{{$project->url}}" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill text-danger" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg></a></div>
        @endif
        @if ($project->git != '')
        <div class="col-1"><a href="{{$project->git}}"  target="_blank"><i class="bi bi-github text-warning"></i></a></div>
        @endif  
    </div>
    <a href="{{route('project.edit', $project)}}" class="btn btn-primary">Editar</a>
    <form method="post" action="{{ route ('project.destroy', $project)}}">
    @csrf
      @method ('DELETE')
      <button type="submit" class="btn btn-danger">Borrar</button>
    </form>
</div>
</div>
</div>

</div>
@endsection