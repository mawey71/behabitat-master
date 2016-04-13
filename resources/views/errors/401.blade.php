@extends('layouts.master')

@section('titulo', '401')

@section('contenido')
    <div class="container">
	    <div class="row"><hr></div>
	    <div class="row">
	        <h1>401</h1>h1>
	        <h2>No estás autorizado</h2>
	        <p>No estás autorizado a acceder a esta página...</p>
	        <a class="btn btn-default" href="{{ route('home') }}">volver a la home</a>
	    </div>
    </div>
@endsection