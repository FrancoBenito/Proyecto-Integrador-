@extends('layouts.layout')

@section('title')
  Digital Rugby House - Admin
@endsection

@section('componentcss')
<link rel="stylesheet" href="/css/product.css">
@endsection

@section('main')

<!-- Formulario -->
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
          <h6 class="card-title text-center alt-font2">Agregar nuevo producto</h6>
            <form class="form-signin" action="/admin/add" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
              <div class="form-label-group alt-fontt mt-5">
                <label for="name">Nombre</label>
                <input value="{{old("name")}}" type="text" name="name" class="form-control" placeholder="Nombre" required autofocus>
              </div>
              <div class="form-label-group alt-fontt mt-4">
                <label for="image_url">Imagen</label>
                <input type="file" class="form-control" name="image_url" required>
              </div>
              <div class="form-label-group alt-fontt mt-4">
                <label for="price">Precio</label>
                <input value="{{old("price")}}" type="number" name="price" class="form-control" placeholder="Precio" step=".01" required autofocus>
              </div>
              <div class="form-label-group alt-fontt mt-5">
                <label for="promo">Promo</label>
                <select name="promo">
                  <option value='1'>Si</option>
                  <option value='0'>No</option>
                </select>
              </div>
              <div class="form-label-group alt-fontt mt-3">
                <label for="favorite">Destacado</label>
                <select name="favorite">
                  <option value='1'>Si</option>
                  <option value='0'>No</option>
                </select>
              </div>
              <div class="form-label-group alt-fontt mt-3">
                <label for="category_id">Categoria</label>
                <select name="category_id">
                  @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                </select>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase mt-5 footer-title-font" type="submit">Agregar producto</button>
            </form>
            @if(count($errors) > 0)
            <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                  <li>{{$error}}</li>
                @endforeach
              </ul>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection