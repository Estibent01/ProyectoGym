@extends('layouts.app')
@section('title','Informacion del Usuario')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1><i class="fa fa-search"></i>Informacion de la maquina</h1>
				<hr>
				<a href=" {{ url('maquinas')}} " class="btn btn-custom"><i class="fa fa-arrow-left"> Ir a Lista de Ejercicios</i></a>
				<table class="table table-striped">
					
     <tr>
						<th>Nombre Maquina:</th>
						<td> {{$maquina->nombre_maquina}} </td>
					</tr>
					<tr>
						<th>Descripcion:</th>
					<td> {{$maquina->descripcion}} </td>
     </tr>
						
					
				</table>
			</div>
		</div>
	</div>
 @endsection    