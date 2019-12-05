@extends('layouts.layout')

@section('title')
  Digital Rugby House - Carrito
@endsection

@section('componentcss')
<link rel="stylesheet" href="/css/product.css">
@endsection

@section('main')

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped alt-fontt">
                  <thead>
                    <tr>
                      <th scope="col">Producto</th>
                      <th scope="col">Precio</th>
                      <th scope="col">Eliminar</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($carrito as $item)
                    <tr>
                      <td>{{$item->product_name}}</td>
                      <td>{{$item->product_price}}</td>
                      <td>
                        <form action="/carrito" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{{$item->id}}}">
                          <button type="submit">Eliminar</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6 alt-fontt">
                <form action="/" method="get">
                    <button class="btn btn-block btn-light">Continuar comprando</button>
                </form>
                </div>
                <form action="/carrito" method="post">
                {{csrf_field()}}
                {{ method_field('DELETE') }}
                <div class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase footer-title-font">Comprar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection