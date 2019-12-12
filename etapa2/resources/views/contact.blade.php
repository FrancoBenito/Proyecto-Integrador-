@extends('layouts.layout')

@section('title')
  Digital Rugby House - Contacto
@endsection

@section('componentcss')
<link id="estilos" rel="stylesheet" href="/css/product.css">
@endsection

@section('main')
<!-- Section Preguntas -->

<section>
  <div class="header-img hero-bread" style="background-image: url('images/bg_contact.jpg');">
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 text-center">
        <p class="breadcrumbs alt-font"><span class="mr-2"></span></p>
      <h1 class="mb-0 bread alt-font">Contacto</h1>
      </div>
    </div>
    </div>
  </div>
</section>
<section class="drh-section">
  <div class="container">

  </div>


<div class="form__container col-12 col-md-4 col-lg-6 offset-lg-3 mb-4">
  <div class="text-center col-12 mb-5 alt-font22">
    <h6>Dejanos tu comentario!</h6>
  </div>
  <div class="form bg-light text-center">
    <form>
      <div class="form-group alt-fontt">
        <label for="formName">Nombre</label>
        <input type="text" class="form-control" id="formName" />
      </div>
      <div class="form-group alt-fontt">
        <label for="formEmail ">Email</label>
        <input type="email" class="form-control" id="formEmail" />
      </div>
      <div class="form-group alt-fontt">
        <label for="formTextArea">Mensaje</label>
        <textarea
          class="form-control"
          id="formTextArea"
          rows="3"
        ></textarea>
      </div>
      <button type="submit" class="btn btn-black button-text-font mt-5 mb-3">Enviar</button>
    </form>
  </div>
</div>
@endsection
