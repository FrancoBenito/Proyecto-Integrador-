@extends('layouts.layout')


@section('title')
  Digital Rugby House
@endsection

@section('componentcss')
<link rel="stylesheet" href="/css/profile.css">
@endsection

@section('main')
<section>
      <div class="container">
          <div class="row">
              <!-- start column -->
              <div class="col-md-4 col-sm-12 bg-white">
                <div id="foto" class="foto padding-40px-all alt-font">
                  <img src="assets/img/perfil.jpg" alt="foto">
                    <p style="margin-top: 20px;"><a href="#">MODIFICAR</a></p>
                </div>
              </div>
              <!-- end column -->
              <!-- start column -->
              <div class="col-md-8 col-sm-12 profile-imput padding-40px-all">
                <!-- imput -->
                <div class="bg-white padding-20px-all  ">
                  <h6 class="alt-font font-weight-300">NOMBRE: <strong>JUAN PEREZ</strong></h6>
                </div>
                <!-- imput -->
                <div class="bg-white padding-20px-all  margin-five-top">
                  <h6 class="alt-font font-weight-300">DIRECCION: <strong>PAEZ 345 - CABA</strong></h6>
                </div>
                <!-- imput -->
                <div class="bg-white padding-20px-all   margin-five-top">
                  <h6 class="alt-font font-weight-300">EMAIL: <strong>JUAN@PEREZ.COM</strong></h6>
                </div>
                <!-- imput -->
                <div class="bg-white padding-20px-all   margin-five-top">
                  <h6 class="alt-font font-weight-300">CONTRASEÑA: <strong>**********</strong></h6>
                </div>
                <!-- imput -->
                <div class="margin-five-top">
                  <a class="btn btn-large btn-transparent-black btn-rounded lg-margin-15px-bottom " href="#">EDITAR PERFIL</a>
                </div>
              </div>
          </div>
      </div>
    </section>

@endsection