@extends('layouts.app')
@section('title','Lista de Musuculos')

@section('content')

<div class="container">
		<div class="row">
			<div class="col-md-10 offset-1">
				<br>
				<h1><i class="fa fa-dumbbell"></i>Lista de Musculos</h1>
				<br>
				<a href="{{url('musculos/create')}}" class="btn btn-custom"><i class="fa fa-plus"></i>Adicionar Musculo
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
				<th>Nombre:</th>
				<th>Descripcion:</th>                
				<th>Acciones:</th>
			</tr>
		</thead>
		<div class="loader d-none text-center">
			<img src="{{ asset('imgs/loading.gif') }}" width="280px">
			<br><br>
		</div>
			
		<tbody id="content">
			@foreach ($musculos as $musculo)
   <tr>
				<td>{{ $musculo->nombre }}</td>
				<td>{{ $musculo->descripcion_musculo }}</td>
				<td>
					<a href=" {{ url('musculos/'.$musculo->id) }} " class="btn btn-sm btn-custom">
						<i class="fa fa-search"></i>
					</a>
					<a href=" {{ url('musculos/'.$musculo->id.'/edit/')}} " class="btn btn-sm btn-custom">
						<i class="fa fa-pen"></i>
					</a>
					<form action="{{ url('musculos/'.$musculo->id) }}" method="post" style="display: inline-block;">
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
		{{$musculos->links()}}
			</div>
		</div>
	</div>
	@endsection