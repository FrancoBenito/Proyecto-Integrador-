@extends('layout')

@section('title')
  Digital Rugby House - Internacional
@endsection

@section('componentcss')
<link rel="stylesheet" href="/css/product.css">
@endsection

@section('main')
<section>
  <div class="header-img hero-bread" style="background-image: url('images/bg_2.jpg');">
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
        <!-- <img src="{{$product->image_url}}" class="img-fluid" alt="producto"/> -->
      </a>
      </div>
      <div class="col-lg-6 prod-detalle pl-md-5">
        <h3 class="alt-font3">{{$product->name}}</h3>
        <p class="precio2 alt-font"><span>${{$product->price}}</span></p>
        <br />
        <!-- <p>
          Camiseta titular del seleccionado Argentino, utilizada en el
          mundial de Japón.
        </p> -->
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

<!-- <section>
  <div class="container">
    <div class="row justify-content-center mb-3 pb-3">
      <div class="col-md-12 heading-section text-center">
        <h2 class="mb-4">Productos Relacionados</h2>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 ">
        <div class="product">
          <a href="#"
            ><img
              class="img-fluid"
              src="images/product-5.jpg"
              alt="producto"
            />
          </a>
          <div class="text py-3 pb-4 px-3 text-center">
            <h3><a href="irlanda.html">Irlanda</a></h3>
            <div class="d-flex">
              <div class="pricing">
                <p class="precio"><span>$6000</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ">
        <div class="product">
          <a href="#"
            ><img
              class="img-fluid"
              src="images/product-2.jpg"
              alt="producto"
            />
            <div class="overlay"></div>
          </a>
          <div class="text py-3 pb-4 px-3 text-center">
            <h3><a href="pumas2.html">Los Pumas alternativa</a></h3>
            <div class="d-flex">
              <div class="pricing">
                <p class="precio"><span>$6500</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ">
        <div class="product">
          <a href="#"
            ><img
              class="img-fluid"
              src="images/product-3.jpg"
              alt="producto"
            />
            <div class="overlay"></div>
          </a>
          <div class="text py-3 pb-4 px-3 text-center">
            <h3><a href="francia.html">Francia</a></h3>
            <div class="d-flex">
              <div class="pricing">
                <p class="precio"><span>$6000</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ">
        <div class="product">
          <a href="#"
            ><img
              class="img-fluid"
              src="images/product-4.jpg"
              alt="producto"
            />
            <div class="overlay"></div>
          </a>
          <div class="text py-3 pb-4 px-3 text-center">
            <h3><a href="inglaterra.html">Inglaterra</a></h3>
            <div class="d-flex">
              <div class="pricing">
                <p class="precio"><span>$7200</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

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