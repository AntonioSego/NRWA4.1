<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Brand routes
Route::get('/brand','App\Http\Controllers\BrandController@index')->name('brand.index');
Route::get('/brand/create','App\Http\Controllers\BrandController@create')->name('brand.create');
Route::post('/brand','App\Http\Controllers\BrandController@store')->name('brand.store');
Route::get('/brand/{brand}/edit','App\Http\Controllers\BrandController@edit')->name('brand.edit');
Route::put('/brand/{brand}/update','App\Http\Controllers\BrandController@update')->name('brand.update');
Route::delete('/brand/{brand}/destroy','App\Http\Controllers\BrandController@destroy')->name('brand.destroy');


//Category routes
Route::get('/category','App\Http\Controllers\CategoryController@index')->name('category.index');
Route::get('/category/create','App\Http\Controllers\CategoryController@create')->name('category.create');
Route::post('/category','App\Http\Controllers\CategoryController@store')->name('category.store');
Route::get('/category/{category}/edit','App\Http\Controllers\CategoryController@edit')->name('category.edit');
Route::put('/category/{category}/update','App\Http\Controllers\CategoryController@update')->name('category.update');
Route::delete('/category/{category}/destroy','App\Http\Controllers\CategoryController@destroy')->name('category.destroy');

//Product routes
Route::get('/product','App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/product/create','App\Http\Controllers\ProductController@create')->name('product.create');
Route::post('/product','App\Http\Controllers\ProductController@store')->name('product.store');
Route::get('/product/{product}/edit','App\Http\Controllers\ProductController@edit')->name('product.edit');
Route::put('/product/{product}/update','App\Http\Controllers\ProductController@update')->name('product.update');
Route::delete('/product/{product}/destroy','App\Http\Controllers\ProductController@destroy')->name('product.destroy');

//User routes
Route::get('/user','App\Http\Controllers\UserController@index')->name('user.index');
Route::get('/user/create','App\Http\Controllers\UserController@create')->name('user.create');
Route::post('/user','App\Http\Controllers\UserController@store')->name('user.store');
Route::get('/user/{user}/edit','App\Http\Controllers\UserController@edit')->name('user.edit');
Route::put('/user/{user}/update','App\Http\Controllers\UserController@update')->name('user.update');
Route::delete('/user/{user}/destroy','App\Http\Controllers\UserController@destroy')->name('user.destroy');

//Order routes
Route::get('/order','App\Http\Controllers\OrderController@index')->name('order.index');
Route::get('/order/create','App\Http\Controllers\OrderController@create')->name('order.create');
Route::post('/order','App\Http\Controllers\OrderController@store')->name('order.store');
Route::get('/order/{order}/edit','App\Http\Controllers\OrderController@edit')->name('order.edit');
Route::put('/order/{order}/update','App\Http\Controllers\OrderController@update')->name('order.update');
Route::delete('/order/{order}/destroy','App\Http\Controllers\OrderController@destroy')->name('order.destroy');