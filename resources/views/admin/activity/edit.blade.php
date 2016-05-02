@extends('layouts.admin.app')

@section('titulo', 'Actividad-Editar')

@section('contenido')
<div class="container">
    <div class="row">
        <hr >
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Actividad</div>
                <div class="panel-body">
                    {!! Form::model($actividad, ['route' => ['admin.activity.update', $actividad], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
                        @include('admin.activity.partials.campos')
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop