<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>beHABITAT-backend-@yield('titulo')</title>

    @include('layouts.estilos')
</head>
<body id="app-layout">
    @include('layouts.nav')

    @yield('contenido')

    @include('layouts.scripts')
</body>
</html>
