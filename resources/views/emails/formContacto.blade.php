@extends('layout.master')

@section('titulo', 'Contacto')

@section('contenido')
    <div class="container">
        <div class="row"><hr></div>
        @include('flash::message')
        <div class="row col-md-6 col-md-offset-3">
            <h1>Formulario de contacto</h1> 
            <p class="lead">Si necesitas más información, rellena este formulario y nos pondremos en contacto contigo lo antes posible</p>
        </div>
        <div class="col-md-6 col-md-offset-3">
                {!! Form::open(['action' => 'EmailController@enviarEmail', 'role' => 'form']) !!}
                    <div class="form-group">
                        {!! Form::label('nombre', 'nombre') !!}
                        {!! Form::input('text', 'nombre', null, ['class' => 'form-control', 'required' => 'required'] ) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'e-mail') !!}
                        {!! Form::input('email', 'email', null, ['class' => 'form-control', 'required' => 'required'] ) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('telefono', 'teléfono') !!}
                        {!! Form::input('text', 'telefono', null, ['class' => 'form-control'] ) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('mensaje', 'mensaje') !!}
                        {!! Form::textarea('mensaje', null, ['class' => 'form-control', 'required' => 'required'] ) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::input('submit', 'enviar', null, ['class' => 'btn btn-primary btn-large'] ) !!}
                    </div>
                {!! Form::close() !!}
        </div>
    </div>
@endsection

