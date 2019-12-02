<!DOCTYPE html>
<html lang="es-AR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/app.css">
  @yield('componentcss')

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <title>@yield('title')</title>
</head>
<body>

  @include('header')
  <main>
    @yield('main')
  </main>

  @include('footer')

</body>
</html>