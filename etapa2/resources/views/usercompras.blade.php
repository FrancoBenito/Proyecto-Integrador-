@extends('layouts.layout')

@section('title')
  Digital Rugby House - Tus compras
@endsection

@section('componentcss')
<link rel="stylesheet" href="/css/product.css">
@endsection

@section('main')

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
                  <!--  
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
                  -->
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row mt-5">
                <div class="col-sm-12  col-md-6 alt-fontt">
                <form action="/" method="get">
                    <button class="btn btn-black">Continuar comprando</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection