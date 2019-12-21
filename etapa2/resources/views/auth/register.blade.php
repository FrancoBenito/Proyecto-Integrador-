@extends('layouts.layout')

@section('title')
  Digital Rugby House - Registro
@endsection

@section('componentcss')
<link id="estilos" rel="stylesheet" href="/css/product.css">
@endsection

@section('main')
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div id="card-color" class="card-body">
            <h5 class="card-title text-center alt-fontt">Registro</h5>
            <form id="set-register" class="form-signin" method="POST" action="{{ route('register') }}"enctype="multipart/form-data">
            @csrf

            

            <div class="form-label-group alt-fontt mt-5">
                <input value="{{ old('name') }}" name="name" type="text" id="name" class="form-control @error('name') is-invalid @enderror" autocomplete="name" placeholder="Usuario" required autofocus>
                <label class="mt-1" for="name">Usuario</label>
                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-label-group alt-fontt mt-3">
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" autocomplete="email" required>
                <label class="mt-1" for="email">Email</label>
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-label-group alt-fontt mt-3">
                <select name="pais" id="pais">
                  <option disabled selected value>Elija un pais</option>
                </select>
                <label class="mt-1" for="email">Pais</label>
              </div>

              <div class="form-label-group mt-3 provincia">
                <label class="" for="provincia" hidden></label>
              </div>

              <div class="form-label-group alt-fontt mt-4">
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" name="password"  autocomplete="new-password" required>
                <label class="mt-1" for="password">Contraseña</label>
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-label-group alt-fontt mt-3">
                <input autocomplete="new-password" name="password_confirmation" type="password" id="password-confirm" class="form-control" placeholder="Contraseñar" required>
                <label class="mt-1" for="password-confirm">Confirmar contraseña</label>
              </div>

              <div class="form-group row alt-fontt mt-4">
                <div class="col-md-12">
                    <input id="avatar" type="file" class="form-control" name="avatar" required>
                    <label class="mt-1" for="avatar">Avatar</label>
                </div>
              </div>

              <button class="btn btn-lg btn-black btn-block text-uppercase" type="submit">Registro</button>

            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

@section('js')
<script src="/js/provincias.js"></script>
<script src="/js/sweetalert.min.js"></script>
<script src="/js/register.js"></script>
@endsection