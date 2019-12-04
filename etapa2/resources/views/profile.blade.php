@extends('layouts.layout')


@section('title')
  Digital Rugby House
@endsection

@section('componentcss')
<!-- <link rel="stylesheet" href="/css/profile.css"> -->
@endsection

@section('main')
<div class="container">
    <h1>Editar Perfil</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="/storage/{{Auth::user()->avatar}}" class="avatar img-circle" alt="avatar">
          <!-- <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control"> -->
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">

        <h3>Tu información</h3>

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
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>

@endsection