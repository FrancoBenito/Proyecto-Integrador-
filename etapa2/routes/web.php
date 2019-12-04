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


Route::get('/homedev', 'HomedevsController@index');

Route::get('/logindev', function(){
  return view('logindev');
});

Route::get('/registerdev', function(){
  return view('registerdev');
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

Route::get('/internacional', 'ProductController@internacional');

Route::get('/urba', 'ProductController@urba');

Route::get('/promociones', 'ProductController@promociones');

Route::get('/product/{id}', 'ProductController@detail');

Route::put('/admin/edit/{id}', 'AdminController@update');

Route::get('/admin', 'AdminController@index')->middleware('admin')->name('admin');

Route::get('/admin/add', 'AdminController@add');

Route::post('/admin/add', 'AdminController@store');

Route::get('/admin/edit/{id}', 'AdminController@edit');

Route::delete('/admin/edit/{id}', 'AdminController@destroy');


Auth::routes();

Route::get('/', 'HomeController@index');
