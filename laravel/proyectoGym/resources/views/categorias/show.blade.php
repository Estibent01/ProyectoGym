@extends('layouts.app')
@section('title','Informacion de los Musculos')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1><i class="fa fa-search"></i>Informacion del categoria</h1>
				<hr>
				<a href=" {{ url('categorias')}} " class="btn btn-custom"><i class="fa fa-arrow-left"> Ir a Lista de categorias</i></a>
				<table class="table table-striped">
					<tr>
						<td colspan="2" class="text-center">
						<img src="{{asset($categorias->imagen)}}" class="img-thumbnail" width="120px">
						</td>
					</tr>
					<tr>
						<th>Nombre categoria:</th>
						<td> {{$categorias->nombre_categoria}} </td>
     </tr>
     <tr>
						<th>Descripcion $categoria:</th>
						<td> {{$categorias->descripcion_categoria}} </td>
					</tr>
					</tr>
				</table>
			</div>
		</div>
	</div>
 @endsection    