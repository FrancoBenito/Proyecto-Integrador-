@extends('layout')

@section('title')
  Digital Rugby House - ADMIN
@endsection

@section('componentcss')
<link rel="stylesheet" href="/css/adminedit.css">
@endsection

@section('main')
<!-- Formulario -->
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
          <h5 class="card-title text-center">Editar producto</h5>
            <form class="form-signin" action="/admin/edit/{$product->id}" method="post">
            {{csrf_field()}}
            {{ method_field('PUT') }}
              <input type="hidden" name="id" value="{{$product->id}}">
              <div class="form-label-group">
                <label for="name">Nombre</label>
                <input value="{{$product->name}}" type="text" name="name" class="form-control" placeholder="Nombre" required autofocus>
              </div>
              <div class="form-label-group">
                <label for="image_url">Imagen</label>
                <img src="{{ url('storage/'.$product->image_url) }}"  alt="">
                <input type="file" class="form-control" name="image_url" required>
              </div>
              <div class="form-label-group">
                <label for="price">Precio</label>
                <input value="{{$product->price}}" type="number" name="price" class="form-control" placeholder="Precio" step=".01" required autofocus>
              </div>
              <div class="form-label-group">
                <label for="size">Talle</label>
                <select name="size" value={{$product->size}}>
                  <option value="{{$product->size}}" selected>{{$product->size}}</option>
                  <option value="s">S</option>
                  <option value="m">M</option>
                  <option value="l">L</option>
                  <option value="xl">XL</option>
                  <option value="xxl">XXL</option>
                </select>
              </div>
              <div class="form-label-group">
                <label for="category_id">Categoria</label>
                <select name="category_id">
                  @foreach($categories as $category)
                    <option value="{{$category->id}}" selected>{{$category->name}}</option>
                  @endforeach
                </select>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase mt-3" type="submit">Editar producto</button>
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
          <h5 class="card-title text-center">Eliminar producto</h5>
            <form class="form-signin" action="/admin/edit/{$product->id}" method="post">
            {{csrf_field()}}
            {{ method_field('DELETE') }}
              <input type="hidden" name="id" value="{{$product->id}}">
              <button class="btn btn-lg btn-primary btn-block text-uppercase mt-3" type="submit">Eliminar producto</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection