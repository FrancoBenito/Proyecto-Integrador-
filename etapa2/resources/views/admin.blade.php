@extends('layouts.layout')

@section('title')
  Digital Rugby House - Admin
@endsection


@section('componentcss')
<link rel="stylesheet" href="/css/admin.css">
@endsection



@section('main')

<h1>Administrar productos</h1>
<ul id='products'>
@foreach($products as $product)
  <li>
    <a href="/admin/edit/{{$product->id}}">{{$product->name}}</a>
  </li>
@endforeach
</ul>

<a href="admin/add" class="btn btn-primary mb-5" role="button">Agregar nuevo producto</a>

@endsection