<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>beHABITAT-backend-@yield('titulo')</title>

    @include('layouts.admin.estilos')
</head>
<body id="app-layout">
    @include('layouts.admin.nav')

    @yield('contenido')

	@include('layouts.partials.footer')
    
    @include('layouts.admin.scripts')
</body>
</html>
