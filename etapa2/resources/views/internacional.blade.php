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
      <h1 class="mb-0 bread alt-font0">Internacionales</h1>
      </div>
    </div>
    </div>
  </div>
</section>
<section class="drh-section">
  <div class="container">
    <div class="row justify-content-center mb-3 pb-3">
      <div class="col-md-12 heading-section text-center">
        <h2 class="mb-4">Seleccionados Nacionales</h2>
        <p>Todas las camisetas del mundo en un solo lugar</p>
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
            <h3><a href="argentina.html">{{$product->name}}</a></h3>
            <div class="d-flex">
              <div class="pricing">
                <p class="precio"><span>${{$product->price}}</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
      <!-- <div class="col-md-6 col-lg-6">
        <div class="product">
          <a href="#"><img class="img-fluid" src="images/product-2.jpg" alt="producto">
          </a>
          <div class="text py-3 pb-4 px-3 text-center">
            <h3><a href="argentina2.html">argentina alternativa</a></h3>
            <div class="d-flex">
              <div class="pricing">
                <p class="precio"><span>$6501</span></p>
              </div>
            </div>
          
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-6">
        <div class="product">
          <a href="#"><img class="img-fluid" src="images/product-3.jpg" alt="producto">
          </a>
          <div class="text py-3 pb-4 px-3 text-center">
            <h3><a href="francia.html">francia</a></h3>
            <div class="d-flex">
              <div class="pricing">
                <p class="precio"><span>$6501</span></p>
              </div>
            </div>
          
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-6">
        <div class="product">
          <a href="#"><img class="img-fluid" src="images/product-4.jpg" alt="producto">
          </a>
          <div class="text py-3 pb-4 px-3 text-center">
            <h3><a href="inglaterra.html">inglaterra</a></h3>
            <div class="d-flex">
              <div class="pricing">
                <p class="precio"><span>$6501</span></p>
              </div>
            </div>
          
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-6">
        <div class="product">
          <a href="#"><img class="img-fluid" src="images/product-5.jpg" alt="producto">
          </a>
          <div class="text py-3 pb-4 px-3 text-center">
            <h3><a href="irlanda.html">irlanda</a></h3>
            <div class="d-flex">
              <div class="pricing">
                <p class="precio"><span>$6501</span></p>
              </div>
            </div>
          
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-6">
        <div class="product">
          <a href="#"><img class="img-fluid" src="images/product-6.jpg" alt="producto">
          </a>
          <div class="text py-3 pb-4 px-3 text-center">
            <h3><a href="australia.html">australia</a></h3>
            <div class="d-flex">
              <div class="pricing">
                <p class="precio"><span>$6501</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-6">
        <div class="product">
          <a href="#"><img class="img-fluid" src="images/product-7.jpg" alt="producto">
          </a>
          <div class="text py-3 pb-4 px-3 text-center">
            <h3><a href="fiji.html">fiji</a></h3>
            <div class="d-flex">
              <div class="pricing">
                <p class="precio"><span>$6501</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-6">
        <div class="product">
          <a href="#"><img class="img-fluid" src="images/product-8.jpg" alt="producto">
          </a>
          <div class="text py-3 pb-4 px-3 text-center">
            <h3><a href="nz.html">nueva zelanda</a></h3>
            <div class="d-flex">
              <div class="pricing">
                <p class="precio"><span>$6501</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<hr>
<!-- loader -->
<div id="drh-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

@endsection