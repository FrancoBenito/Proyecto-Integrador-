<!DOCTYPE html>
<html lang="es-AR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/app.css">
  
  @yield('componentcss')

  <!-- favicon -->
        <link rel="/" href="{{url('/images/favicon.png')}}">
        <link rel="apple-touch-icon" href="{{url('/images/apple-touch-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{url('/images/apple-touch-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{url('/images/apple-touch-icon-114x114.png')}}">


  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  <title>@yield('title')</title>
</head>
<body>

  @include('header')
  <main>
    @yield('main')
  </main>

  @include('footer')

  @yield('js')
  <script src="/js/easter.js"> </script>
</body>
</html>