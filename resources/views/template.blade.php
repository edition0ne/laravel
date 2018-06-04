<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }} : @yield('title')</title>
  </head>
  <body>
    @include('parts/header')
    @yield('content')
    <header>
      <nav>
        <ul>
          <li><a href="{{ url('/') }}">Accueil</a></li>
        </ul>
      </nav>
    </header>
  
    <footer>
    </footer>
  </body>
</html>
