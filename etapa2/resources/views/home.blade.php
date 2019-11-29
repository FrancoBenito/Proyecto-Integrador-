@extends('layout')

@section('title')
  Digital Rugby House
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
        <div class="card">
          <img
            src="/assets/img/products/product-1.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">
              Card title that wraps to a new line
            </h5>
            <p class="card-text">
              This is a longer card with supporting text below as a
              natural lead-in to additional content. This content is a
              little bit longer.
            </p>
            <button type="button" class="btn btn-dark">
              Añadir al carrito
            </button>
          </div>
        </div>
        <div class="card">
          <img
            src="/assets/img/products/product-1.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">
              Card title that wraps to a new line
            </h5>
            <p class="card-text">
              This is a longer card with supporting text below as a
              natural lead-in to additional content. This content is a
              little bit longer.
            </p>
            <button type="button" class="btn btn-dark">
              Añadir al carrito
            </button>
          </div>
        </div>
        <div class="card">
          <img
            src="/assets/img/products/product-1.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">
              Card title that wraps to a new line
            </h5>
            <p class="card-text">
              This is a longer card with supporting text below as a
              natural lead-in to additional content. This content is a
              little bit longer.
            </p>
            <button type="button" class="btn btn-dark">
              Añadir al carrito
            </button>
          </div>
        </div>
        <div class="card">
          <img
            src="/assets/img/products/product-1.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">
              Card title that wraps to a new line
            </h5>
            <p class="card-text">
              This is a longer card with supporting text below as a
              natural lead-in to additional content. This content is a
              little bit longer.
            </p>
            <button type="button" class="btn btn-dark">
              Añadir al carrito
            </button>
          </div>
        </div>
        <div class="card">
          <img
            src="/assets/img/products/product-1.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">
              Card title that wraps to a new line
            </h5>
            <p class="card-text">
              This is a longer card with supporting text below as a
              natural lead-in to additional content. This content is a
              little bit longer.
            </p>
            <button type="button" class="btn btn-dark">
              Añadir al carrito
            </button>
          </div>
        </div>
        <div class="card">
          <img
            src="/assets/img/products/product-2.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">
              Card title that wraps to a new line
            </h5>
            <p class="card-text">
              This is a longer card with supporting text below as a
              natural lead-in to additional content. This content is a
              little bit longer.
            </p>
            <button type="button" class="btn btn-dark">
              Añadir al carrito
            </button>
          </div>
        </div>
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