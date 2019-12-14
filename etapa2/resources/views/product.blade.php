@extends('layouts.layout')

@section('title')
  Digital Rugby House - {{$product->name}}
@endsection

@section('componentcss')
<link id="estilos" rel="stylesheet" href="/css/product.css">
<link rel="stylesheet" type="text/css" href="/css/sweetalert.css">
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
        <form id="agregarProductoForm" action="{{ url('product/'.$product->id)}}" method="post">
            {{csrf_field()}}
            @auth
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="product_id" value="{{$product -> id}}">
            <input type="hidden" name="product_price" value="{{$product -> price}}">
            <input type="hidden" name="product_name" value="{{$product -> name}}">
            <button type="submit" class="btn btn-black" onclick="EventoCarrito()">
              Añadir al carrito
            </button>

  

            @endauth
      </div>
    </div>
  </div>
</section>
<hr />
<hr />
<!-- loader -->
<!-- <div id="drh-loader" class="show fullscreen">
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
</div> -->
@endsection

@section('js')
<script src="/js/sweetalert.min.js"></script>
<script src="/js/product-detail.js"></script>
@endsection