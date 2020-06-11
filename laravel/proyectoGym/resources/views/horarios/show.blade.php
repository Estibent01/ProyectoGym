@extends('layouts.app')
@section('title','Informacion de los horarios')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1><i class="fa fa-search"></i>Informacion del Horario</h1>
				<hr>
				<a href=" {{ url('horario')}} " class="btn btn-custom"><i class="fa fa-arrow-left"> Ir a Lista de los Horarios</i></a>
				<table class="table table-striped">
					<tr>
						<th>Dia :</th>
						<td> {{$horario->dia}} </td>
     </tr>
     <tr>
						<th>Hora Apertura:</th>
						<td> {{$horario->horario_apertura}} </td>
					</tr>
					<tr>
						<th>Hora Cierre:</th>
						<td> {{$horario->horario_cierre}} </td>
     </tr>
				</table>
			</div>
		</div>
	</div>
 @endsection    