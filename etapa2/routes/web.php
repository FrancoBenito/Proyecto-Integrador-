<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'HomeController@index');

Route::get('/login', function(){
  return view('login');
});

Route::get('/register', function(){
  return view('register');
});

Route::get('/profile', function(){
  return view('profile');
});

Route::get('/preguntas', function(){
  return view('preguntas');
});

Route::get('/carrito', function(){
  return view('carrito');
});
Route::put('/admin/edit/{id}', 'AdminController@update');

Route::get('/admin', 'AdminController@index');

Route::get('/admin/add', 'AdminController@add');

Route::post('/admin/add', 'AdminController@store');


Route::get('/admin/edit/{id}', 'AdminController@edit');


Route::delete('/admin/edit/{id}', 'AdminController@destroy');

