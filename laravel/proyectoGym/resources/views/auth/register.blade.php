@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
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

                        <input type="text" name="fullname" value="{{old('fullname')}}" placeholder="Nombre Completo" class="form-control @error('fullname') is-invalid @enderror">
                                @error('fullname')
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
                            <input type="text" name="phone" value="{{old('phone')}}" placeholder="Teléfono" class="form-control @error('phone') is-invalid @enderror">
                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                            <br>
                            <input type="date" name="birthdate" value="{{old('birthdate')}}" placeholder="Fecha de Nacimiento" class="form-control @error('birthdate') is-invalid @enderror">
                                                    @error('birthdate')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                            <br>
                                <select name="gender" class="form-control">
                                    <option value="">Genero...</option>
                                    <option value="Male" @if (old('gender')== 'Male')selected @endif>Male</option>
                                    <option value="Female" @if (old('gender')== 'Female')selected @endif>Female</option>
                                </select>
                            <br>
{{--                                 <button class="btn btn-block btn-custom btn-upload" type="button">
                                <i class="fa fa-upload"></i>
                                Seleccionar Archivo
                            </button>
                            
                            <input type="file" name="photo" id="photo" class="d-none" accept="image/*">

                            <br>
                            <div class="text-center">
                                <img id="preview" class="img-thumbnail @error('photo') is-valid @enderror" src="{{ asset('imgs/no-photo.png') }}" width="150px">
                                                    @error('photo')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                            </div>
                            <br> --}}
                            <input type="text" name="address" value="{{old('address')}}" placeholder="Dirección" class="form-control @error('address') is-invalid @enderror">
                                                    @error('address')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
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
