@extends('layouts.layout')

@section('title')
  Digital Rugby House - URBA
@endsection

@section('componentcss')
<link id="estilos" rel="stylesheet" href="/css/product.css">
@endsection

@section('main')
<section>
  <div class="header-img hero-bread" style="background-image: url('images/bg_3.jpg');">
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 text-center">
        <p class="breadcrumbs alt-font"><span class="mr-2"></span></p>
      <h1 class="mb-0 bread alt-font0">Nacionales</h1>
      </div>
    </div>
    </div>
  </div>
</section>
<section class="drh-section">
  <div class="container">
    <div class="row justify-content-center mb-3 pb-3">
      <div class="col-md-12 heading-section text-center">
        <h2 class="mb-4">Nacionales</h2>
        <p>Todas las camisetas del pais en un solo lugar</p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
    @foreach($products as $product)
      <div class="col-md-6 col-lg-6">
        <div class="product">
          <a href="{{ url('product/'.$product->id)}}"><img class="img-fluid" src="{{ url('storage/'.$product->image_url) }}" alt="producto">
          </a>
          <div class="text py-3 pb-4 px-3 text-center">
            <h3>{{$product->name}}</h3>
            <div class="d-flex">
              <div class="pricing">
                <p class="precio"><span>${{$product->price}}</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
<hr>
<!-- loader -->
<!-- <div id="drh-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> -->
@endsection