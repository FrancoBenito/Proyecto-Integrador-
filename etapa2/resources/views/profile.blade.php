@extends('layouts.layout')


@section('title')
  Digital Rugby House - Mi perfil
@endsection

@section('componentcss')
<link rel="stylesheet" href="/css/product.css">
@endsection

@section('componentcss')
<!-- <link rel="stylesheet" href="/css/profile.css"> -->
@endsection

@section('main')
<div class="container alt-font2">
    <h4 class="mt-5 mb-5 text">Editar Perfil</h4>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img class="img-size mt-4 mb-5" src="/storage/{{Auth::user()->avatar}}" class="avatar img-circle" alt="avatar">
        <div class="mt-1 mb-5">
              <a class="btn btn-black" href="compras">TUS COMPRAS</a>
              </div>
              <hr size=20 color="#ed1164">
          <!-- <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control"> -->
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">

        <h5 class="mb-5 mt-3">Tu información</h5>

        <form class="form-horizontal" role="form" method="post" action="/profile">
        {{csrf_field()}}
          <div class="form-group">
            <label for="name"class="col-md-3 control-label">Nombre de usuario:</label>
            <div class="col-md-8">
              <input name="name" id="name" class="form-control" type="text" value="{{$user["name"]}}">
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input name="email" id="email" class="form-control" type="text" value="{{$user["email"]}}">
            </div>
          </div>
          <div class="form-group">
            <label for="pais" class="col-lg-3 control-label">Pais:</label>
            <div class="col-lg-8">
              <input name="pais" id="text" class="form-control" type="text" value="{{$user["pais"]}}" readonly>
            </div>
          </div>
          <div class="form-group">
            <label for="provincia" class="col-lg-3 control-label">Provincia:</label>
            <div class="col-lg-8">
              <input name="provincia" id="text" class="form-control" type="text" value="{{$user["provincia"]}}" readonly>
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input name="password" id="password" class="form-control" type="password" value="{{$user["password"]}}">
            </div>
          </div>
          <div class="form-group">
            <label for="password-confirm" class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input name="password_confirmation" id="password-confirm" class="form-control" type="password" value="{{$user["password"]}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-black" value="GUARDAR">
              <span></span>
              <input type="reset" class="btn btn-black" value="CANCELAR">

            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>

@endsection