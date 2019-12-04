@extends('layout')

@section('title')
  Digital Rugby House - Login
@endsection

@section('main')
<!-- Formulario -->
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form class="form-signin" action="{{ route('login') }}" method="post">
            @csrf

              <div class="form-label-group">
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email</label>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-label-group">
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" autocomplete="current-password" name="password" placeholder="Password" required>
                <label for="inputPassword">Contraseña</label>
              @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input name="remember" type="checkbox" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="custom-control-label" for="remember">Recordar contraseña</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection