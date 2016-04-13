@extends('layouts.master')

@section('titulo', '503')

@section('contenido')
    <div class="container">
		<div class="row"><hr></div>
		<div class="row">
	        <h1>503</h1>
	        <h2>Estamos en mantenimiento</h2>
	        <p>Vuelve más tarde...</p>
	        <a class="btn btn-default" href="{{ route('home') }}">volver a la home</a>
	    </div>
    </div>
@endsection