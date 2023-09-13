<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('products',[ProductController::class,'index'])->middleware('auth.basic');
Route::post('products',[ProductController::class,'store'])->middleware('auth.basic');;
Route::get('products/{id}',[ProductController::class,'show'])->middleware('auth.basic');;
Route::get('products/{id}/edit',[ProductController::class,'edit'])->middleware('auth.basic');;
Route::put('products/{id}/edit',[ProductController::class,'update'])->middleware('auth.basic');;
Route::delete('products/{id}/delete',[ProductController::class,'destroy'])->middleware('auth.basic');;

Route::get('categories',[CategoryController::class,'index'])->middleware('auth.basic');
Route::post('categories',[CategoryController::class,'store'])->middleware('auth.basic');
Route::get('categories/{id}',[CategoryController::class,'show'])->middleware('auth.basic');
Route::get('categories/{id}/edit',[CategoryController::class,'edit'])->middleware('auth.basic');
Route::put('categories/{id}/edit',[CategoryController::class,'update'])->middleware('auth.basic');
Route::delete('categories/{id}/delete',[CategoryController::class,'destroy'])->middleware('auth.basic');


