@extends ('home')

@section ('footer')
 <h1>Hello, world!</h1>


        <a href="{{ route('inicio', ['name' => 'Alejandra y Verónica', 'numero' => 4])}}">Vuelvo a home</a>
 @endsection
