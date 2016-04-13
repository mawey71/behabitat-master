@extends('layout.master')

@section('titulo', 'Administración')

@section('contenido')
<div class="container">
    <div class="row"><hr></div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Panel de administración</div>

                <div class="panel-body">
                    Estás dentro! {{ Auth::user()->username }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
