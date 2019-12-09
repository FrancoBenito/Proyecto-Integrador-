@extends('layouts.layout')

@section('title')
  Digital Rugby House - Admin
@endsection


@section('componentcss')
<link rel="stylesheet" href="/css/product.css">
@endsection



@section('main')


<div class="container">
<div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
<h6 class="alt-font2 text-center mt-5">Administrar productos</h6>
<ul id='products'>
@foreach($products as $product)
  <li>
    <a href="/admin/edit/{{$product->id}}">{{$product->name}}</a>
  </li>
@endforeach
</ul>

<a href="admin/add" class="btn btn-primary btn-block text-uppercase mt-3 footer-title-font"  role="button">Agregar nuevo</a>
</div>
        </div>
      </div>
    </div>
  </div>
@endsection