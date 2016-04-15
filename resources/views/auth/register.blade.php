@extends('layouts.master')

@section('contenido')
<div class="container">
    <div class="row">
        <hr >
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>
                <div class="panel-body">
                    @include('layouts.partials.errors')
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">nombre usuario</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="username" value="{{ old('username') }}">
<!-- 
                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
 -->                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">e-mail</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
<!-- 
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

<!--                                 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">confirmación password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

<!--                                 @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">nombre</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">

<!--                                 @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('apellido1') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">primer apellido</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="apellido1" value="{{ old('apellido1') }}">

<!--                                 @if ($errors->has('apellido1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellido1') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('apellido2') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">segundo apellido</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="apellido2" value="{{ old('apellido2') }}">
<!-- 
                                @if ($errors->has('apellido2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellido2') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="radio" id="cliente" name="rol" value="cliente" {{ old('rol')=="cliente" ? 'checked='.'"'.'checked'.'"' : '' }} /><label for="rol" class="{{ $errors->has('rol') ? ' alert-danger' : '' }}">Soy cliente</label>
                                <input type="radio" id="proveedor" name="rol" value="proveedor" {{ old('rol')=="proveedor" ? 'checked='.'"'.'checked'.'"' : '' }} /><label for="rol" class="{{ $errors->has('rol') ? ' alert-danger' : '' }}">Soy proveedor</label>
<!--                                 {!! Form::radio('rol', 'cliente', true); !!} Soy cliente
                                {!! Form::radio('rol', 'proveedor'); !!} Soy proveedor
 -->                             </div>
                        </div>

                        <div class="form-group{{ $errors->has('nif') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">nif</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" id="nif" name="nif" value="{{ old('nif') }}">

<!--                                 @if ($errors->has('nif'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nif') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('razon_social') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">razón social</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" id="razon_social" name="razon_social" value="{{ old('razon_social') }}">

<!--                                 @if ($errors->has('razon_social'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('razon_social') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cif') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">cif</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" id="cif" name="cif" value="{{ old('cif') }}">

<!--                                 @if ($errors->has('cif'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cif') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">dirección</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="direccion" value="{{ old('direccion') }}">

<!--                                 @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('localidad') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">localidad</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="localidad" value="{{ old('localidad') }}">

<!--                                 @if ($errors->has('localidad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('localidad') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('provincia') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">provincia</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="provincia" value="{{ old('provincia') }}">

<!--                                 @if ($errors->has('provincia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('provincia') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('codigo_postal') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">código postal</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="codigo_postal" value="{{ old('codigo_postal') }}">

<!--                                 @if ($errors->has('codigo_postal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('codigo_postal') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">teléfono</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="telefono" value="{{ old('telefono') }}">

<!--                                 @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telefono_movil') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">teléfono móvil</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="telefono_movil" value="{{ old('telefono_movil') }}">

<!--                                 @if ($errors->has('telefono_movil'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono_movil') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
