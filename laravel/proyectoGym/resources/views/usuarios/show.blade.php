@extends('layouts.app')
@section('title','Informacion de las maquinas')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1><i class="fa fa-search"></i>Informacion del Ejercicio</h1>
				<hr>
				<a href=" {{ url('usuarios')}} " class="btn btn-custom"><i class="fa fa-arrow-left"> Ir a Lista de Ejercicios</i></a>
				<table class="table table-striped">
					<tr>
						<td colspan="2" class="text-center">
						<img src="{{asset($usuario->imagen_usuario)}}" class="img-thumbnail" width="120px">
						</td>
					</tr>
					<tr>
						<th>Nombre :</th>
						<td> {{$usuario->nombre}} </td>
     </tr>
     <tr>
						<th>Documento:</th>
						<td> {{$usuario->no_documento}} </td>
					</tr>
					<tr>
						<th>Email:</th>
						<td> {{$usuario->email}} </td>
     </tr>
     <tr>
						<th>Imagen Usiario:</th>
						<td> {{$usuario->imagen_usuario}} </td>
     </tr>
     <tr>
						<th>Roll:</th>
						<td> {{$usuario->rol}} </td>
     </tr>
     <tr> 
						<th>Id Horario:</th>
						<td> {{$usuario->id_horario}} </td>
     </tr>
     <tr>
						<th>Contraseña:</th>
						<td> {{$usuario->password}} </td>
					</tr>
				</table>
			</div>
		</div>
	</div>
 @endsection    