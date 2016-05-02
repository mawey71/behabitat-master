@extends('layouts.admin.app')

@section('titulo', 'Actividades')

@section('contenido')
<div class="container">
    <div class="row">
        <hr />
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('flash::message')
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Actividades</div>
                <div class="panel-body">
                    <a href="{{ route('admin.activity.create') }}" class="btn btn-primary btn-crear">Crear Nueva Actividad</a>
                    <p>Mostrando <span class="negrita">{{ $actividades->count() }}</span> de <span class="negrita">{{ $actividades->total() }}</span> actividades</p>
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
                                    <td>
                                        <a href="{{ route('admin.activity.edit', $actividad) }}" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a> 
                                        <a href="{{ route('admin.activity.show', $actividad) }}" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
