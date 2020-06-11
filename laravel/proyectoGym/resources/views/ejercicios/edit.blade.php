@extends('layouts.app')
@section('title', 'Editar ejercicio')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
			<h1 class="fa fa-pen">Actualizar  ejercicio</h1>
				<hr>
				<a href="{{ url('ejercicios') }}" class="btn btn-warning">
					<i class="fas fa-angle-left"></i>
					Ir a usuarios
				</a>
				<hr>
				<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Actializar</div>
					<div class="card-body"></div>
	<form action="{{url('users/'.$user->id)}}" method="post" enctype="multipart/form-data">
		@csrf 
		@method('PUT')

        <select name="categoria" class="form-control">

     <option value="">Categorias Ejercicios...</option>
     <option value="estiramiento">Estiramiento</option>
     <option value="bajar_peso">Bajar Peso</option>
     <option value="tonificar">Tonificar</option>
     <option value="cardio">Cardio</option>
     <option value="subir_masa_muscular">Masa Muscular</option>
     </select>
                                   @error('categoria')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror
           <br>

		<input type="text" name="nombre_ejercicio" value="{{$ejercicio->nombre_ejercicio}}" placeholder="Nombre Ejercicio" class="form-control @error('nombre_ejercicio') is-invalid @enderror">
                                   @error('email')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror
           <br>
	</div>
    <textarea class="form-control" name="descripcion" id=""  row="5" placeholder="Descripcion Ejercicio">{{$ejercicio->descripcion}}</textarea>
   @error('descripcion')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
           <br>
           <input type="text" name="numero_series" value="{{$ejercicio->numero_series}}" placeholder="Numero de series " class="form-control @error('numero_series') is-invalid @enderror">
                                   @error('numero_series')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror
   <br>
   <input type="text" name="tiempo_ejercicio" value="{{$ejercicio->tiempo_ejercicio}}" placeholder="Tiempo del Ejercicio " class="form-control @error('numero_series') is-invalid @enderror">
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
	<div class="col-12">
		<button class="btn btn-block btn-custom btn-upload" type="button">
			<i class="fa fa-upload"></i>
			Seleccionar Foto
		</button>
		<input type="file" name="imagen" id="imagen" class="d-none" accept="image/*">
		<br>
		<div class="text-center @error('imagen') is-invalid @enderror">
			<img id="preview" class="img-thumbnail" src="{{ asset($ejercicio->imagen)}}" width="120px">
		</div>
		@error('imagen')
		<span class="invalid-feedback" role="alert">
			<strong>{{$message}}</strong>
			@enderror
		</span>
	</div>
	<br>
   <select name="maquina_ejercicio" class="form-control">

   <option value="">Maquina...</option>
   <option value="caminadora">Caminadora</option>
   <option value=""></option>

   </select>
           <br>
		<button type="submit" class="btn btn-custom" >Guardar</button>
	</form>
			</div>
		</div>
	</div>
	@endsection