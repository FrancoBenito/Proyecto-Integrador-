<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
      $products = Product::where('favorite','=',1)->get();
  
      return view('home', [
        'products' => $products
      ]);
    }
}
