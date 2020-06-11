@extends('layouts.app')
@section('title','Informacion del Usuario')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1><i class="fa fa-search"></i>Informacion del Ejercicio</h1>
				<hr>
				<a href=" {{ url('ejercicios')}} " class="btn btn-custom"><i class="fa fa-arrow-left"> Ir a Lista de Ejercicios</i></a>
				<table class="table table-striped">
					<tr>
						<td colspan="2" class="text-center">
						<img src="{{asset($ejercicio->imagen)}}" class="img-thumbnail" width="120px">
						</td>
					</tr>
					<tr>
						<th>Nombre Categoria:</th>
						<td> {{$ejercicio->categoria}} </td>
     </tr>
     <tr>
						<th>Nombre Ejercicio:</th>
						<td> {{$ejercicio->nombre_ejercicio}} </td>
					</tr>
					<tr>
						<th>Descripcion:</th>
						<td> {{$ejercicio->descripcion}} </td>
     </tr>
     <tr>
						<th>Numero de Series:</th>
						<td> {{$ejercicio->numero_series}} </td>
     </tr>
     <tr>
						<th>Tiempo de Ejercicio:</th>
						<td> {{$ejercicio->tiempo_ejercicio}} </td>
     </tr>
     <tr>
						<th>Musculo A trabajar en el Ejercicio:</th>
						<td> {{$ejercicio->musculo_ejercicio}} </td>
     </tr>
     <tr>
						<th>Maquina A trabajar en el Ejercicio:</th>
						<td> {{$ejercicio->maquina_ejercicio}} </td>
					</tr>
				</table>
			</div>
		</div>
	</div>
 @endsection    