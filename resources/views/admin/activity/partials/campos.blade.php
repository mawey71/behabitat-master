                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            {!! Form::label('nombre', 'nombre', ['class' => 'col-md-4 control-label']) !!}
                            <!--<label class="col-md-4 control-label">nombre</label>-->

                            <div class="col-md-6">
                                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'nombre de la actividad', 'required' => 'true', 'value' => old('nombre')]) !!}

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
                            {!! Form::label('descripcion', 'descripción', ['class' => 'col-md-4 control-label']) !!}

                            <div class="col-md-6">
                                {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'descripción de la actividad', 'required' => 'true', 'value' => old('descripcion')]) !!}

                                @if ($errors->has('descripcion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
