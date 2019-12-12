@extends('layouts.layout')

@section('title')
  Digital Rugby House - Tus compras
@endsection

@section('componentcss')
<link id="estilos" rel="stylesheet" href="/css/product.css">
@endsection

@section('main')
<section>
  <div class="header-img hero-bread" style="background-image: url('images/bg_compras.jpg');">
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 text-center">
        <p class="breadcrumbs alt-font"><span class="mr-2"></span></p>
      <h1 class="mb-0 bread alt-font0">Compras</h1>
      </div>
    </div>
    </div>
  </div>
</section>
<div class="container mb-4 mt-5">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped alt-fontt">
                  <thead>
                    <tr>
                      <th scope="col">Fecha</th>
                      <th scope="col">Producto</th>
                      <th scope="col">Precio</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($subset as $item)
                    <tr>
                      <td>{{$item["created_at"]}}</td>
                      <td>{{$item["product_name"]}}</td>
                      <td>{{$item["product_price"]}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row mt-5">
                <div class="col-sm-12  col-md-6 alt-fontt">
                <form action="/profile" method="get">
                    <button class="btn btn-black">Volver a mi perfil</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection