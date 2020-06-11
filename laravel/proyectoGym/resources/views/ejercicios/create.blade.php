@extends('layouts.app')
@section('title','Crear Ejercicio')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1><i class="fa fa-dumbbell"></i>Crear Ejercicios</h1>
                                <hr>
                                <a href="{{url('ejercicios')}}" class="btn btn-custom"><i class="fa fa-arrow-left"></i>Ir a la Lista de Ejercicios</a>
                                <hr>
                                <form action="{{url('ejercicios')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                            {{-- <input type="text" name="categoria" value="{{old('categoria')}}" placeholder="Nombre Categoria" class="form-control @error('categoria') is-invalid @enderror"> --}}
                            <select name="categoria" class="form-control @error('categoria') is-invalid @enderror">
                                <option value="">Seleccione la Categoria...</option>
                                @foreach ($cats as $cat)
                                    <option value="{{ $cat->id }}" @if(old('categoria')== $cat->name) selected @endif>{{ $cat->name}}</option>
                                @endforeach
                            </select>
                                                            @error('categoria')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                    <br>
                                    <input type="text" name="nombre_ejercicio" value="{{old('nombre_ejercicio')}}" placeholder="Nombre Ejercicio" class="form-control @error('nombre_ejercicio') is-invalid @enderror">
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                    <br>
                            <textarea class="form-control" name="descripcion" id=""  row="5" placeholder="Descripcion Ejercicio">{{old('descripcion')}}</textarea>
                            @error('descripcion')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                    <br>
                                    <input type="text" name="numero_series" value="{{old('numero_series')}}" placeholder="Numero de series " class="form-control @error('numero_series') is-invalid @enderror">
                                                            @error('numero_series')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                            <br>
                            <input type="text" name="tiempo_ejercicio" value="{{old('tiempo_ejercicio')}}" placeholder="Tiempo del Ejercicio " class="form-control @error('numero_series') is-invalid @enderror">
                            @error('tiempo_ejercicio')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                            <br>
                            <select name="musculo_ejercicio" class="form-control">

                                <option value="">Musculo...</option>
                                <option value="cuello">cuello</option>
                                <option value=""></option>
    
                            </select>
            
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
                            <select name="maquina_ejercicio" class="form-control">

                            <option value="">Maquina...</option>
                            <option value="caminadora">Caminadora</option>
                            <option value=""></option>

                            </select>
                                    <br>
                                    <button class="btn btn-custom" type="submit"><i class="fa fa-save "></i> Guardar</button>
                                </form>
                                        </div>
                                    </div>
                                </div>

	@endsection