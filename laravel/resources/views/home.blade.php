@extends ('layouts.layout')

@section ('content')

    @isset ($nombre)
    <h1> <img src="{{ asset('img/logo.png')}}" class="logo"> Hola <?= $nombre ?>!</h1>

    <h1><img src="{{ asset('img/logo.png')}}" style="height: 1.5em"> Hola {{ $nombre }} !</h1>
    @endisset

    @isset ($numero)
    <h2> el número es el {{ $numero }} </h2>

    @if($numero == 17)
        <p> Aquí hago la suma inline de 4 + 7 es <?= (4 + 7) ?> </p>
    @else
        <p> y la raíz cúbica de 125 es <?= (125 ** (1/3)) ?></p>
    @endif
    @endisset]]



    @for($i  = 0; $i < 10; $i++)

        <p>Voy por el número {{ $i }}</p>

    @endfor

    <div id="popcorn" aria-describedby="tooltip"></div>
    <div id="tooltip" role="tooltip">
      My tooltip
      <div id="arrow" data-popper-arrow></div>
    </div>

    @yield ('footer')
@endsection
