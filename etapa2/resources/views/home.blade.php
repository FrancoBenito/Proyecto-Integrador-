@extends('layouts.layout')

@section('title')
  Digital Rugby House - Home
@endsection

@section('main')
<!-- Productos Destacados -->
<div class="container my-5 align-items-center">
  <div class="row align-items-center">
    <div class="text-center col-12 mb-5">
      <h2>Productos Destacados</h2>
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
            <button type="button" class="btn btn-dark">
              Añadir al carrito
            </button>
          </div>
        </div>
    @endforeach
    </div>
    </section>
  </div>
</div> 

<!-- Formulario de Contacto -->
<div class="form__container col-12 col-md-4 col-lg-6 offset-lg-3 mb-4">
  <div class="text-center col-12 mb-5"">
    <h2>Dejanos tu comentario!</h2>
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
