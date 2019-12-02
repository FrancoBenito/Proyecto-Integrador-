<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    public function index(){
      $products = Product::where('id','>=',5)->where('id','<=',10)->get();

      return view('home', [
        'products' => $products
      ]);
    }
}
