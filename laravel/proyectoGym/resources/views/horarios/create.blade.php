@extends('layouts.app')
@section('title','Crear Horario')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1><i class="fa fa-dumbbell"></i>Crear Horario</h1>
                                <hr>
                                <a href="{{url('horario')}}" class="btn btn-custom"><i class="fa fa-arrow-left"></i>Ir a la Lista de horarios</a>
                                <hr>
                                <form action="{{url('horario')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                            
                                    <input type="date" name="dia" value="{{old('dia')}}" placeholder="Ingrse dia " class="form-control @error('dia') is-invalid @enderror">
		 						@error('dia')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                                                 @error('dia')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                    <br>
                            <input class="form-control" type="time" name="horario_apertura" id=""  row="5" placeholder="Ingrese horario">{{old('horario_apertura')}}</input>
                            @error('no_documento')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                    
                                   
                                    <br>
                                    <input type="time" class="form-control" name="horario_cierre" id=""   placeholder="Ingrese el horario">{{old('horario_cierre')}}</input>
                            @error('email')
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