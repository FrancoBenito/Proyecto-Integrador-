@extends('layout')

@section('main')
<div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-4 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <form class="form-signin" method="POST" action="{{ route('register') }}">
            @csrf

              <div class="form-label-group">
                <input value="{{ old('name') }}" name="name" type="text" id="name" class="form-control @error('name') is-invalid @enderror" autocomplete="name" placeholder="Usuario" required autofocus>
                <label for="name">Usuario</label>
                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-label-group">
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" autocomplete="email" required>
                <label for="email">Email</label>
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <hr>

              <div class="form-label-group">
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" name="password"  autocomplete="new-password" required>
                <label for="password">Contraseña</label>
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-label-group">
                <input autocomplete="new-password" name="password_confirmation" type="password" id="password-confirm" class="form-control" placeholder="Contraseñar" required>
                <label for="password-confirm"">Confirmar contraseña</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>

            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
