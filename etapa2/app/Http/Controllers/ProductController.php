<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Compra;
use Illuminate\Support\Facades\Auth;


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

  public function compras(){
    $userID = Auth::user()->id;

    $products = Compra::where('user_id','=',$userID)->get();
    $subset = $products->map->only(['created_at','product_price','product_name']);
    // dd($subset);
    return view('compras', [
      'subset' => $subset
    ]);
  }

  public function detail($id){
    $product = Product::find($id);
    return view('product', [
      'product' => $product
    ]);
  }
}
