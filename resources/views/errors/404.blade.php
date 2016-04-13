@extends('layouts.master')

@section('titulo', '404')

@section('contenido')
	<div class="container">
		<div class="row"><hr></div>
		<div class="row">
	        <h1>404</h1>
	        <h2>Página no encontrada</h2>
	        <p>La página que buscas no existe o no hemos podido encontrarla...</p>
	        <a class="btn btn-default" href="{{ route('home') }}">volver a la home</a>
        </div>
    </div>
@endsection