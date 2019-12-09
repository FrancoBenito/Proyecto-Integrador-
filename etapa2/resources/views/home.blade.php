@extends('layouts.layout')

@section('title')
  Digital Rugby House - Home
@endsection

@section('componentcss')
<link rel="stylesheet" href="/css/product.css">
@endsection

@section('main')

<section>
  <div class="header-img hero-bread" style="background-image: url('images/bg_home.jpg');">
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 text-center">
        <p class="breadcrumbs alt-font"><span class="mr-2"></span></p>
      <h1 class="mb-0 bread alt-font0">Tenemos las del mundial!</h1>
      </div>
    </div>
    </div>
  </div>
</section>
<!-- Productos Destacados -->
<div class="container my-5">
  <div class="row ">
    <div class="text-center col-12 alt-font2 mt-5 mb-5">
      <h5>Productos Destacados</h5>
    </div>
    <section>
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
                <form action="/" method="post">
            {{csrf_field()}}
            @auth
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="product_id" value="{{$product -> id}}">
            <input type="hidden" name="product_price" value="{{$product -> price}}">
            <input type="hidden" name="product_name" value="{{$product -> name}}">
            <button type="submit" class="btn btn-lg btn-dark mt-3 mb-5">
              Añadir al carrito
            </button>
            @endauth
            </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    </div>
    </section>
  </div>
</div> 



     <section id="altura">
            <div  class="container">
                <div class="row">
                    <div class="text-center col-12 mb-5">
                        <h6 class="footer-title-font text-uppercase mt-5">Si tenes dudas o buscás algo especial, escribinos.<br>Estamos para ayudarte.</h6><br>
                        <a class="text-center btn btn-outline-light" href="/contact">Consulta</a>

                  
                    </div>    
                </div>
            </div>
        </section>


@endsection
