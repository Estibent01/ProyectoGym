@extends('layouts.app')
@section('title','Lista Usuarios')

@section('content')

<div class="container">
		<div class="row">
			<div class="col-md-10 offset-1">
				<br>
				<h1><i class="fa fa-users"></i>Lista de Usuarios</h1>
				<br>
				<a href="{{url('usuarios/create')}}" class="btn btn-custom"><i class="fa fa-plus"></i>Adicionar Usuarios
				</a> 
				@csrf
				<input type="hidden" id="tmodel" value="users">
				<input type="search" id="qsearch" class="form-search" autocomplete="false" placeholder="Buscar.." autofocus="off">
	<hr>
	{{-- @if (session('message'))
	{{session('message')}}
	@endif --}}
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				
				<th>Nombre usuario</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<div class="loader d-none text-center">
			<img src="{{ asset('imgs/loading.gif') }}" width="280px">
			<br><br>
		</div>
			
		<tbody id="content">
			@foreach ($usuarios as $usuario)
   <tr>
			
				<td>{{ $usuario->nombre }}</td>
				<td>
					<a href=" {{ url('usuarios/'.$usuario->id) }} " class="btn btn-sm btn-custom">
						<i class="fa fa-search"></i>
					</a>
					<a href=" {{ url('usuarios/'.$usuario->id.'/edit/')}} " class="btn btn-sm btn-custom">
						<i class="fa fa-pen"></i>
					</a>
					<form action="{{ url('usuarios/'.$usuario->id) }}" method="post" style="display: inline-block;">
						@csrf
						@method('delete')
						<button type="button" class="btn btn-sm btn-custom-danger btn-delete">
							<i class=" fa fa-trash"></i>
						</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
		{{$usuarios->links()}}
			</div>
		</div>
	</div>
	@endsection