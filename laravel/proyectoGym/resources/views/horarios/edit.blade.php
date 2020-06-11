@extends('layouts.app')
@section('title','Lista de horarios')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1><i class="fa fa-pen"></i>Editar Horario</h1>
	<hr>
	<a href="{{url('horario')}}" class="btn btn-custom"><i class="fa fa-arrow-left"></i>Ir a la Lista de Horarios</a>
	<hr>
    <form action="{{url('horario')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                            
                                    <input type="date" name="dia" value="{{('dia')}}" placeholder="Ingrse dia " class="form-control @error('dia_maquina') is-invalid @enderror">
		 						@error('dia')
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
                            <input  type="time" class="form-control" name="horario_apertura" id=""  row="5" placeholder="Ingrese hora">{{('horario_apertura')}}</input>
                            @error('horario_apertura')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                    
                                   
                                    <br>
                                    <input type="time" class="form-control" name="horario_cierre" id=""   placeholder="Ingrese Correo Electronico">{{('horario_cierre')}}</input>
                            @error('horario_cierre')
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