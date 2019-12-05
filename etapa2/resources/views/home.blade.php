@extends('layouts.layout')

@section('title')
  Digital Rugby House - Home
@endsection

@section('componentcss')
<link rel="stylesheet" href="/css/product.css">
@endsection

@section('main')
<!-- Productos Destacados -->
<div class="container my-5 align-items-center">
  <div class="row align-items-center">
    <div class="text-center col-12 mb-0 alt-font2">
      <h5>Productos Destacados</h5>
    </div>
    <section>
      <div class="card-columns">
    @foreach($products as $product)
    <div class="card">
      <a href="{{ url('product/'.$product->id)}}">
        <img
          src="{{ url('storage/'.$product->image_url) }}"
          class="card-img-top"
          alt="Imagen no disponible"
        />
      </a>
          <div class="card-body">
            <h5 class="card-title">
              {{$product -> name}}
            </h5>
            <p class="card-text">
              ${{$product->price}}
            </p>
            <form action="/" method="post">
            {{csrf_field()}}
            @auth
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="product_id" value="{{$product -> id}}">
            <input type="hidden" name="product_price" value="{{$product -> price}}">
            <input type="hidden" name="product_name" value="{{$product -> name}}">
            <button type="submit" class="btn btn-dark">
              Añadir al carrito
            </button>
            @endauth
            </form>
          </div>
        </div>
    @endforeach
    </div>
    </section>
  </div>
</div> 

<!-- Formulario de Contacto -->
<div class="form__container col-12 col-md-4 col-lg-6 offset-lg-3 mb-4">
  <div class="text-center col-12 mb-5 alt-font22">
    <h6>Dejanos tu comentario!</h6>
  </div>
  <div class="form bg-light">
    <form>
      <div class="form-group">
        <label for="formName">Nombre</label>
        <input type="text" class="form-control" id="formName" />
      </div>
      <div class="form-group">
        <label for="formEmail">Email</label>
        <input type="email" class="form-control" id="formEmail" />
      </div>
      <div class="form-group">
        <label for="formTextArea">Mensaje</label>
        <textarea
          class="form-control"
          id="formTextArea"
          rows="3"
        ></textarea>
      </div>
      <button type="submit" class="btn btn-primary mb-2">
        Enviar
      </button>
    </form>
  </div>
</div>
@endsection
