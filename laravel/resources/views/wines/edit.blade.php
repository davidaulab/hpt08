@extends ('layouts.layout')

@section ('title', 'Nuevo vino')

@section ('content')

<h1>Nuevo vino</h1>




 <x-msg-error :errors="$errors" />

        <x-flash-message code="{{ Session::get ('code') }}" message="{{ Session::get ('message') }}"/>

        <form method="POST" action="{{ route('wine.update', $wine)}}" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="mb-3">
              <label for="name" class="form-label">Nombre del vino</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ $wine->name}}">
            </div>

              <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea name="description" id="description" class="form-control" >{{ $wine->description}}</textarea>
              </div>
            <div class="mb-3">
              <label for="winery" class="form-label">Bodega del vino</label>
              <input type="text" class="form-control" id="winery" name="winery" value="{{ $wine->winery}}">
            </div>
            <div class="mb-3">
              <label for="vol" class="form-label">Graduación del vino</label>
              <input type="number" step="0.1" class="form-control" id="vol" name="vol" value="{{ $wine->vol}}">
            </div>
            <div class="mb-3">
              <label for="price" class="form-label">Precio del vino</label>
              <input type="number" step="0.1" class="form-control" id="price" name="price" value="{{ $wine->price}}">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>


@endsection
