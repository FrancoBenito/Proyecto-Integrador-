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
          <h6 class="card-title alt-font2 text-center">Editar producto</h6>
            <form class="form-signin" action="/admin/edit/{$product->id}" method="post">
            {{csrf_field()}}
            {{ method_field('PUT') }}
              <input type="hidden" name="id" value="{{$product->id}}">
              <div class="form-label-group alt-fontt mt-5">
                <label for="name">Nombre</label>
                <input value="{{$product->name}}" type="text" name="name" class="form-control" placeholder="Nombre" required autofocus>
              </div>
             
              <div class="form-label-group alt-fontt mt-4">
                <label for="price">Precio</label>
                <input value="{{$product->price}}" type="number" name="price" class="form-control" placeholder="Precio" step=".01" required autofocus>
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
                    <option value="{{$category->id}}" selected>{{$category->name}}</option>
                  @endforeach
                </select>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase mt-5 footer-title-font" type="submit">Editar producto</button>
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
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
          <h6 class="card-title alt-font2 text-center"></h6>
            <form class="form-signin" action="/admin/edit/{$product->id}" method="post">
            {{csrf_field()}}
            {{ method_field('DELETE') }}
              <input type="hidden" name="id" value="{{$product->id}}">
              <button class="btn btn-lg btn-primary btn-block text-uppercase mt-3 footer-title-font" type="submit">Eliminar producto</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection