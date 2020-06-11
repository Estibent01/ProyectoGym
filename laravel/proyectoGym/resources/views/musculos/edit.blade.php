@extends('layouts.app')
@section('title', 'Editar usuario')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
			<h1 class="fa fa-pen">Actualizar  Musculo</h1>
				<hr>
				<a href="{{ url('musculos') }}" class="btn btn-warning">
					<i class="fas fa-angle-left"></i>
					Ir a musculos
				</a>
				<hr>
				<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Actializar</div>
					<div class="card-body"></div>
	<form action="{{url('musculos/'.$musculo->id)}}" method="post" enctype="multipart/form-data">
		@csrf 
		@method('PUT')
		<input type="hidden" name="id" value="{{ $musculo->id }}">
		<div class="container">Nombre:
			</div>
			<div class="col-12">
		<input type="hidden" name="_method" value="PUT">
		<input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ $musculo->nombre }}">
		@error('nombre')
		<span class="invalid-feedback" role="alert">
			<strong>{{$message}}</strong>
		</span>
		@enderror
		<br><br>
	</div>
	<div class="container">Descripcion Musculo:
			</div>
			<div class="col-12">
		<input type="text" name="descripcion_musculo" class="form-control @error('descripcion_musculo') is-invalid @enderror" value="{{ $musculo->descripcion_musculo }}" >
		@error('descripcion_musculo')
		<span class="invalid-feedback" role="alert">
			<strong>{{$message}}</strong>
		</span>
		@enderror
		<br><br>
	<div class="col-12">
		<button class="btn btn-block btn-custom btn-upload" type="button">
			<i class="fa fa-upload"></i>
			Seleccionar Foto
		</button>
		<input type="file" name="imagen" id="imagen" class="d-none" accept="image/*">
		<br>
		<div class="text-center @error('imagen') is-invalid @enderror">
			<img id="preview" class="img-thumbnail" src="{{ asset($musculo->imagen)}}" width="120px">
		</div>
		@error('imagen')
		<span class="invalid-feedback" role="alert">
			<strong>{{$message}}</strong>
			@enderror
		</span>
	</div>
		<br><br>
		<div class="container">
		<button type="submit" class="btn btn-success"><i class="fa fa-pen"></i> Actualizar </button>
		</div>
		<br>
	</form>
	</div>
		</div>
	</div>
	@endsection
