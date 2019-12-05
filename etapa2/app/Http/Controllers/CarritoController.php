<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Carrito;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
  public function addToCarrito(Request $form){
    Carrito::create([
      'user_id' => $form["user_id"],
      'product_id' => $form["product_id"],
      'product_price' => $form["product_price"],
      'product_name' => $form["product_name"],
    ]);

    return redirect('/');
  }

  public function showAll(){
    $user = Auth::user()->id;
    $carrito = Carrito::where('user_id','=',$user)->get();

    return view('carrito',[
      'carrito' => $carrito
    ]);
  }

  public function buy(){
    $userID = Auth::user()->id;

    $carrito = Carrito::where('user_id','=',$userID);
    $carrito->delete();

    return redirect('carrito');
  }

  public function deleteProduct(Request $form){
    $producto = Carrito::find($form["id"]);

    $producto->delete();

    return redirect('carrito');

  }
}
