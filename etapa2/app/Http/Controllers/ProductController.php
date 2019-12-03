<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ProductController extends Controller
{
  public function internacional(){
    $products = Product::where('category_id','=',9)->get();
    return view('internacional', [
      'products' => $products
    ]);
  }

  public function urba(){
    $products = Product::where('category_id','=',10)->get();
    return view('urba', [
      'products' => $products
    ]);
  }

  public function promociones(){
    $products = Product::where('promo','=','1')->get();
    return view('promociones', [
      'products' => $products
    ]);
  }

  public function detail($id){
    $product = Product::find($id);
    return view('product', [
      'product' => $product
    ]);
  }
}
