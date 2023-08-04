<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME')}} @yield ('title')</title>
    <!-- link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    -->
    @vite (['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
    <link href="{{ asset('css/misestilos.css') }}" rel="stylesheet"/>

  </head>
  <body>
    <nav class="navbar navbar-expand-lg cabecera">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="{{ route('home') }}"><img src="{{ asset('img/logo.png')}}" class="logo"> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-white"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <li class="nav-item">
                <a class="nav-link text-white" href="{{ route ('bars.index') }}">Mejores bares</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{ route ('contact') }}">Contacto</a>
              </li>
            </ul>
            <span class="navbar-text text-white">
              Navbar text with an inline element
            </span>
          </div>
        </div>
      </nav>
    <main class="container">

        @yield('content')

    </main>

<x-footer />
<!-- script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
-->
<script>
    function confirmar (texto, titulo) {

        return confirm (texto, titulo);
    }
    </script>
</body>

</html>
