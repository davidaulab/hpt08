@extends ('layouts.layout')

@section ('title', 'Nuevo bar')

@section ('content')

<h1>Nuevo bar</h1>




 <x-msg-error :errors="$errors" />

        <x-flash-message code="{{ Session::get ('code') }}" message="{{ Session::get ('message') }}"/>

        <form method="POST" action="{{ route('bars.store')}}">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nombre del bar</label>
              <input type="name" class="form-control" id="name" name="name" value="{{ old ('name')}}">

            </div>

              <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea name="description" id="description" class="form-control" >{{ old ('description')}}</textarea>
              </div>


            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>


@endsection
