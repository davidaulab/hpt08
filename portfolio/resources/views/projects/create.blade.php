@extends ('layouts.app')

@section ('content')

<h1 class="text-center">Nuevo proyecto</h1>

<div class="card" style="width:800px; max-width: 80%; margin:auto">
  <!-- img src="..." class="card-img-top" alt="..." -->
  <div class="card-body">
    <h5 class="card-title">Alta de nuevo proyecto</h5>
    <p class="card-text">
        <form method="post" action="{{route ('project.store')}}" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="name" class="form-label">Nombre del proyecto</label>
                <input type="text" class="form-control" id="name" name="name"> 
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción del proyecto</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="image" name="image"> 
            </div>
            <div class="mb-3">
                <label for="git" class="form-label">Repositorio del proyecto</label>
                <input type="text" class="form-control" id="git" name="git"> 
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">Url del proyecto</label>
                <input type="text" class="form-control" id="url" name="url"> 
            </div>
            <div class="mb-3 d-flex row">
                @foreach ($teches as $key => $tech)
                <div class="col-md-4">
                    <input type="checkbox" class="form-check-input" id="tech_{{ $key}}" name="teches[]" value="{{$tech->id}}">     
                    <label for="teches" class="form-check-label">{{$tech->name}}</label>
                </div>
                @endforeach
                
            
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            </form>

    </p>
  
  </div>
</div>
@endsection