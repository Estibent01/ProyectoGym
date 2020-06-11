@extends('layouts.app')
@section('title','Lista de Maquina')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1><i class="fa fa-pen"></i>Editar Maquina</h1>
	<hr>
	<a href="{{url('maquinas')}}" class="btn btn-custom"><i class="fa fa-arrow-left"></i>Ir a la Lista de Ejercicios</a>
	<hr>
	<form action="{{url('maquinas/'.$maquina->id)}}" method="post" enctype="multipart/form-data">
		@csrf
  @method('PUT')
  
  
  
                                   @error('maquina')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror
           <br>
           <input type="text" name="nombre_maquina" value="{{$maquina->nombre_maquina}}" placeholder="Ingrese Musco A ejercitar" class="form-control @error('nombre_maquina') is-invalid @enderror">
                                   @error('email')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror
           <br>
   <textarea class="form-control" name="descripcion" id=""  row="5" placeholder="Datos">{{$maquina->descripcion}}</textarea>
   @error('descripcion')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror       
  
  
           <br>
		<button type="submit" class="btn btn-custom" >Guardar</button>
	</form>
			</div>
		</div>
	</div>
	@endsection