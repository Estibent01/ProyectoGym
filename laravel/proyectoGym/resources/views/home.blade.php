@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 mt-5">
            <div class="card">
                <img src="{{ asset('imgs/mod-users.png') }}" height="280px" class="card-img-top">
                <div class="card-body">
                	<a href="{{url('users')}}" class="btn btn-block btn-custom">
                		Modo Usuarios
                	</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mt-5">
            <div class="card">
                <img src="{{ asset('imgs/mod-categories.png') }}" height="280px" class="card-img-top">
                <div class="card-body">
                	<a href="{{url('categories')}}" class="btn btn-block btn-custom">
                		Modo Categorias
                	</a>
                </div>
            </div>
        </div>

          <div class="col-md-4 mt-5">
            <div class="card">
                <img src="{{ asset('imgs/mod-articles.png') }}" height="280px" class="card-img-top">
                <div class="card-body">
                	<a href="{{url('articles')}}" class="btn btn-block btn-custom">
                		Modo Articulos
                	</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
