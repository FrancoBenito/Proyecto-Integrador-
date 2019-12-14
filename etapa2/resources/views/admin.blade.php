@extends('layouts.layout')

@section('title')
  Digital Rugby House - Admin
@endsection


@section('componentcss')
<link id="estilos" rel="stylesheet" href="/css/product.css">
@endsection



@section('main')


<div class="container">
<div class="row">
      <div class="col-sm-12">
        <div class="card  my-5">
          <div id="card-color" class="card-body text-center">
<h6 class="alt-font2 text-center mt-1">Administrar productos</h6>
<ul id='products'>
@foreach($products as $product)
  <li>
    <a href="/admin/edit/{{$product->id}}">{{$product->name}}</a>
  </li>
@endforeach
</ul>

<a href="admin/add" class=" btn btn-black button-text-font mt-5 mb-3" role="button">Agregar nuevo</a>
</div>
        </div>
      </div>
    </div>
  </div>
@endsection