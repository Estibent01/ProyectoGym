@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-6">
            <div class="card">
                    <img src="{{ asset('imgs/register.png') }}" height="360px" class="card-img-top">
                    <div class="card-title text-center">
                        <h3>
                            <i class="fa fa-user"></i>
                        {{ __('custom.title-register') }}</label>
                        </h3>
                    </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <input type="text" name="nombre" value="{{old('nombre')}}" placeholder="Nombre Completo" class="form-control @error('nombre') is-invalid @enderror">
                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <br>
                            <input type="number" name="no_documento" value="{{old('no_documento')}}" placeholder="Numero de Documento Completo" class="form-control @error('no_documento') is-invalid @enderror">
                                @error('no_documento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <br>
                            <input type="text" name="email" value="{{old('email')}}" placeholder="Correo Electrónico"class="form-control @error('email') is-invalid @enderror">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                            <br>
                            <button class="btn btn-block btn-custom btn-upload" type="button">
                                <i class="fa fa-upload"></i>
                                Seleccionar Archivo
                            </button>
                            
                            <input type="file" name="imagen_usuario" id="photo" class="d-none" accept="image/*">

                            <br>
                            <div class="text-center">
                                <img id="preview" class="img-thumbnail @error('imagen_usuario') is-valid @enderror" src="{{ asset('imgs/no-photo.png') }}" width="150px">
                                                    @error('imagen_usuario')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                            </div>
                            <br>
                            <select name="rol" class="form-control @error('rol') is-invalid @enderror">
                                <option value="">Seleccione el Rol</option>
                                <option value="Entrenador">Entrenador</option>
                                <option value="Administrador">Administrador</option>
                                <option value="Aprendiz">Aprendiz</option>
                            </select>
                                                     @error('rol')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                            <br>
                            {{-- <select name="id_horario" class="form-control @error('id_horario') is-invalid @enderror">
                                <option value="">Seleccione el dia</option>
                                @foreach ($horarios as $horario)
                                    <option value="{{ $horario->id }}" @if(old('id_horario')== $horario->dia) selected @endif>{{ $horario->dia}}</option>
                                @endforeach
                            </select>
                                                     @error('id_horario')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror --}}
                            <br>
                            <input type="password" name="password" value="{{old('password')}}" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                            <br>
                            <input type="password" name="password_confirmation" value="{{old('password')}}" placeholder="Confirmar Contraseña " class="form-control">
                                                    @error('password')
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
    </div>
</div>
@endsection
