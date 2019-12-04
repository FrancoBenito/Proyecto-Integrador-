<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomedevsController extends Controller
{
  public function index(){
    $products = Product::where('favorite','=',1)->get();

    return view('homedev', [
      'products' => $products
    ]);
  }
}
