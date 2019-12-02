<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class AdminController extends Controller
{
  public function index(){
    $products = Product::all();

    return view('admin', [
      'products' => $products
    ]);
  }

  public function add(){
    $categories = Category::all();
    return view('adminadd',[
      'categories' => $categories
    ]);
  }

  public function store(Request $form){

    $this->validate($form, [
      'name' => 'required|min:4',
      'image_url' => 'required',
      'price' => 'required|min:0',
      'size' => 'required',
      'category_id' => 'required',
    ],[
      'required' => 'El campo :attribute es obligatorio',
      'min' => 'El minimo del campo :attribute es de 0',
      'max' => 'El maximo del campo :attribute es de 10',
      'size' => 'El campo :attribute tiene una longitud minima de 4 caracteres'
    ]);

    $ruta = $form["image_url"]->store('public');
    $nombreArchivo = basename($ruta);

    Product::create([
      'name' => $form["name"], 
      'image_url' => $nombreArchivo,
      'price' => $form["price"], 
      'size' => $form["size"], 
      'category_id' => $form["category_id"], 
    ]);

    return redirect('admin');
  }

  public function edit($id){
    $product = Product::find($id);
    $categories = Category::all();
    return view('adminedit',[
      'product' => $product,
      'categories' => $categories
    ]);
  }

  public function update(Request $form){
    $product = Product::find($form["id"]);

    $product -> name = $form["name"];
    $product -> image_url = $form["image_url"];
    $product -> price = $form["price"];
    $product -> size = $form["size"];
    $product -> category_id = $form["category_id"];
    $product->save();
    return redirect('admin');

  }

  public function destroy(Request $form){

    $product = Product::find($form["id"]);
    // var_dump($actor);exit;
    $product->delete();
    return redirect('admin');
  }
}


