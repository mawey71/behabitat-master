@extends('layouts.admin.app')

@section('titulo', 'Administración')

@section('contenido')
<div class="container">
    <div class="row"><hr></div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Panel de administración</div>

                <div class="panel-body">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="menuMantenimientos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Mantenimientos<!-- <span class="caret"></span> -->
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="menuMantenimientos">
                        <li><a href="{{ route('admin.activity.index') }}">Actividades</a></li>
                        <li class="disabled"><a href="#">Otro</a></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
