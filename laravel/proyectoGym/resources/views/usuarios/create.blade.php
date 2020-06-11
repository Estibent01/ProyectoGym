@extends('layouts.app')
@section('title','Crear Usuarios')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1><i class="fa fa-dumbbell"></i>Crear Uusuario</h1>
                                <hr>
                                <a href="{{url('usuarios')}}" class="btn btn-custom"><i class="fa fa-arrow-left"></i>Ir a la Lista de Usuarios</a>
                                <hr>
                                <form action="{{url('usuarios')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                            
                                    <input type="text" name="nombre" value="{{old('nombre')}}" placeholder="Nombre del Usuario" class="form-control @error('nombre') is-invalid @enderror">
		 						@error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                                                 @error('nombre')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                    <br>
                            <input type="number" class="form-control" name="no_documento"  placeholder="Ingrese docuemnto">
                            @error('no_documento')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                    
                                   
                                    <br>
                                    <input type="email" class="form-control" name="email"  placeholder="Ingrese Correo Electronico">{{old('email')}}</textarea>
                            @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                    <br>
                                

                                    <button class="btn btn-block btn-custom btn-upload" type="button">
                                        <i class="fa fa-upload"></i>
                                        Seleccionar Archivo
                                    </button>
                                    
                                    <input type="file" name="imagen_usuario" id="photo" class="d-none" accept="image/*">

                                    <br>
                                    <div class="text-center">
                                        <img id="preview" class="img-thumbnail @error('imagen_usuario') is-valid @enderror" src="{{ asset('imgs/no-photo.png') }}" width="150px">
                                                            @error('imagen_usuario')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                            </div>

        
                            <textarea class="form-control" name="rol" id=""  row="5" placeholder="Ingrese Rol">{{old('rol')}}</textarea>
                            @error('rol')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                    <br>

                                    <select name="id_horario" class="form-control @error('id_horario') is-invalid @enderror">
                                        <option value="">Seleccione el dia</option>
                                        @foreach ($horarios as $horario)
                                            <option value="{{ $horario->id }}" @if(old('id_horario')== $horario->dia) selected @endif>{{ $horario->dia}}</option>
                                        @endforeach
                                    </select>
                                                             @error('id_horario')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                    <br>
                                    <input type="password" class="form-control" name="password"  placeholder="Ingrese la contraseña">{{old('password')}}</textarea>
                            @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <br>
                                    <button class="btn btn-custom" type="submit"><i class="fa fa-save "></i> Guardar</button>
                                </form>
                                        </div>
                                    </div>
                                </div>

	@endsection