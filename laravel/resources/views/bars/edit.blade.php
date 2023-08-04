@extends ('layouts.layout')

@section ('title', 'Nuevo bar')

@section ('content')

<h1>Actualización de bar</h1>




        <x-msg-error :errors="$errors" />
        <x-flash-message code="{{ Session::get ('code') }}" message="{{ Session::get ('message') }}"/>

        <form method="POST" action="{{ route('bars.update', $bar->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nombre del bar</label>
              <input type="name" class="form-control" id="name" name="name" value="{{ $bar->name}}">

            </div>

              <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea name="description" id="description" class="form-control" >{{ $bar->description}}</textarea>
              </div>

              <div class="mb-3">
                <label for="image" class="form-label">Foto</label>
                <input class="form-control" type="file" id="image" name="image">
              </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>


@endsection
