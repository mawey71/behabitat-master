@extends('layouts.admin.app')

@section('titulo', 'Actividades')

@section('contenido')
<div class="container">
    <div class="row">
        <hr >
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('flash::message')
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Actividades</div>
                <div class="panel-body">
                <a href="{{ route('admin.activity.create') }}" class="btn btn-primary btn-crear">Crear Nueva Actividad</a>
                    <table class="table table-striped">
                        <thead>
                           <th>ID</th>
                           <th>Nombre</th> 
                           <th>Descripción</th>
                        </thead>
                        <tbody>
                            @foreach($actividades as $actividad)                        
                                <tr>
                                    <td>{{ $actividad->id }}</td>
                                    <td>{{ $actividad->nombre }}</td>
                                    <td>{{ $actividad->descripcion }}</td>
                                    <td><a href="#" class="btn btn-warning"></a> 
                                        <a href="#" class="btn btn-danger"></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $actividades->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop
