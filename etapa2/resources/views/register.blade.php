@extends('layout')

@section('title')
  Digital Rugby House - Register
@endsection

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
            <form class="form-signin">
              <div class="form-label-group">
                <input type="text" id="inputUserame" class="form-control" placeholder="Usuario" required autofocus>
                <label for="inputUserame">Usuario</label>
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email" required>
                <label for="inputEmail">Email</label>
              </div>
              
              <hr>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                <label for="inputPassword">Contraseña</label>
              </div>
              
              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Contraseñar" required>
                <label for="inputConfirmPassword">Confirmar contraseña</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection