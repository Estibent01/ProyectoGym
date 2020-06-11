@extends('layouts.app')
@section('title','Lista de Categoria')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1><i class="fa fa-dumbbell"></i>Añadir Categoria</h1>
                                <hr>
                                <a href="{{url('categorias')}}" class="btn btn-custom"><i class="fa fa-arrow-left"></i>Ir a la Lista de categorias</a>
                                <hr>
                                <form action="{{url('categorias')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" name="nombre_categoria" value="{{old('nombre_categoria')}}" placeholder="Nombre Categoria" class="form-control @error('nombre_categoria') is-invalid @enderror">
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                    <br>
                                    <textarea class="form-control" name="descripcion_categoria" id=""  row="5" placeholder="Descripcion categoria">{{old('descripcion_categoria')}}</textarea>
                            @error('descripcion_categoria')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                    <br>
                                    <br>                                        
                            <br>
                                        <button class="btn btn-block btn-custom btn-upload" type="button">
                                        <i class="fa fa-upload"></i>
                                        Seleccionar Archivo
                                    </button>
                                    
                                    <input type="file" name="imagen" id="photo" class="d-none" accept="image/*">

                                    <br>
                                    <div class="text-center">
                                        <img id="preview" class="img-thumbnail @error('imagen') is-valid @enderror" src="{{ asset('imgs/no-photo.png') }}" width="150px">
                                                            @error('imagen')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                            </div>
                            <br>                           
                                    <br>
                                    <button class="btn btn-custom" type="submit"><i class="fa fa-save "></i> Guardar</button>
                                </form>
                                        </div>
                                    </div>
                                </div>

	@endsection