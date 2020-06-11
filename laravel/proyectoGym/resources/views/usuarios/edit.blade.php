@extends('layouts.app')
@section('title','Lista de Usuarios')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1><i class="fa fa-pen"></i>Editar usuario</h1>
	<hr>
	<a href="{{url('usuarios')}}" class="btn btn-custom"><i class="fa fa-arrow-left"></i>Ir a la Lista de Ejercicios</a>
	<hr>
    <form action="{{url('usuarios')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                            
                                    <input type="text" name="nombre" value="{{('nombre')}}" placeholder="Ingrse Nombre " class="form-control @error('nombre_maquina') is-invalid @enderror">
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
                            <textarea class="form-control" name="no_documento" id=""  row="5" placeholder="Ingrese docuemnto">{{('no_documento')}}</textarea>
                            @error('no_documento')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                    
                                   
                                    <br>
                                    <textarea type="email" class="form-control" name="email" id=""   placeholder="Ingrese Correo Electronico">{{('email')}}</textarea>
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

        
                            <textarea class="form-control" name="rol" id=""  row="5" placeholder="Ingrese Rol">{{('rol')}}</textarea>
                            @error('rol')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                    <br>

                                    <textarea class="form-control" name="id_horario" id=""  row="5" placeholder="Ingrese Id Horario">{{('id_horario')}}</textarea>
                            @error('id_horario')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                    <br>
                                    <textarea class="form-control" name="password" id=""  row="5" placeholder="Ingrese Contraseña">{{('password')}}</textarea>
                            @error('pasword')
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