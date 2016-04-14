<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="beHABITAT">
        <meta name="author" content="Ricardo Mejias">

        <title>beHABITAT-@yield('titulo')</title>

        <!-- *********** para cuando solo desarrolle en el portatil ******** -->
        <!--<link rel="stylesheet" type="text/css" href="assets/css/behabitat.css">
        <link rel="stylesheet" type="text/css" href="elixir('assets/css/behabitat.css')">
        <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.css">-->
        
        {!! Html::style('assets/css/bootstrap.min.css') !!}
        {!! Html::style('assets/css/modern-business.css') !!}
        {!! Html::style('assets/font-awesome/css/font-awesome.css') !!}
        {!! Html::style('assets/css/app.css') !!}
        
    </head>
    <body>
        @include('layouts.partials.nav')

        @yield('contenido')
        
        @include('layouts.partials.footer')

        <!-- ************ para cuando solo desarrolle en el portatil ************** -->
        <!--<script type="text/javascript" src="elixir('assets/js/behabitat.js')"></script>
        <script type="text/javascript" src="assets/js/behabitat.js"></script> -->
        
        {!! Html::script('assets/js/jquery.min.js') !!}
        {!! Html::script('assets/js/bootstrap.min.js') !!}
        {!! Html::script('assets/js/app.js') !!}
        
    </body>
</html>

