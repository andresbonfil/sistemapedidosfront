<!DOCTYPE html>
<html lang="es">
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="{{asset('css/plantilla.css')}}">
</head>
<body>
    <header>
        <h2><a href="" style="color:white; text-decoration:none"><!--{{route('home')}}-->
        Sistema pedidos</a>
        </h2>
        @yield('nav')
    </header>
    @yield('content')
    Contenido
    <footer>
    <hr>
    footer
    </footer>
</body>
</html>