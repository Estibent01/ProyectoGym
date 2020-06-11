@extends('layouts.app')
@section('title','Lista de Usuarios')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1><i class="fa fa-dumbbell"></i>Crear Ejercicios maquina</h1>
                                <hr>
                                <a href="{{url('maquinas')}}" class="btn btn-custom"><i class="fa fa-arrow-left"></i>Ir a la Lista de Maquinas</a>
                                <hr>
                                <form action="{{url('maquinas')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                            
                                    <input type="text" name="nombre_maquina" value="{{old('nombre_maquina')}}" placeholder="Ingrse Musculo que desea ejercitar " class="form-control @error('nombre_maquina') is-invalid @enderror">
		 						@error('nombre_maquina')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                                                 @error('nombre_maquina')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                    <br>
                            <textarea class="form-control" name="descripcion" id=""  row="5" placeholder="Datos">{{old('descripcion')}}</textarea>
                            @error('descripcion')
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