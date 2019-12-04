@extends('layouts.layout')

@section('title')
  Digital Rugby House - Internacional
@endsection

@section('componentcss')
<link rel="stylesheet" href="/css/product.css">
@endsection

@section('main')
<section>
  <div class="header-img hero-bread" style="background-image: url('/images/bg_5.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 text-center">
          <p class="breadcrumbs alt-font"><span class="mr-2"></span></p>
          <h1 class="mb-0 bread alt-font0">Detalle de Producto</h1>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="drh-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-5 ">
        <a href="{{ url('storage/'.$product->image_url) }}" class="image-popup">
          <img src="{{ url('storage/'.$product->image_url) }}" class="img-fluid" alt="producto"/>
        </a>
      </div>
      <div class="col-lg-6 prod-detalle pl-md-5">
        <h3 class="alt-font3">{{$product->name}}</h3>
        <p class="precio2 alt-font"><span>${{$product->price}}</span></p>
        <br />
        <div class="row mt-4">
          <div class="col-md-12">
            <p style="color: #000;">TALLES XS - S- M- L - XL -XXL</p>
          </div>
        </div>
        <br />
        <p>
          <a href="#" class="btn btn-black py-3 px-5">Agregar al carrito</a>
        </p>
      </div>
    </div>
  </div>
</section>
<hr />
<hr />
<!-- loader -->
<div id="drh-loader" class="show fullscreen">
  <svg class="circular" width="48px" height="48px">
    <circle
      class="path-bg"
      cx="24"
      cy="24"
      r="22"
      fill="none"
      stroke-width="4"
      stroke="#eeeeee"
    />
    <circle
      class="path"
      cx="24"
      cy="24"
      r="22"
      fill="none"
      stroke-width="4"
      stroke-miterlimit="10"
      stroke="#F96D00"
    />
  </svg>
</div>
@endsection