<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TagController;
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

Route::get('/', function () {
    return view('welcome');
});

//Product
//Route::resource('/product', ProductsController::class); tem a msm função
//que o código abaixo..
Route::get('/product', [ProductsController::class, 'index'])->name('product.index'); 
Route::get('/product/create',[ProductsController::class,'create'])->name('product.create');
Route::post('/product/store', [ProductsController::class,'store'])->name('product.store');
Route::get('/product/edit/{product}', [ProductsController::class,'edit'])->name('product.edit');
Route::post('/product/update/{product}',[ProductsController::class,'update'])->name('product.update');
Route::get('/product/destroy/{product}',[ProductsController::class,'destroy'])->name('product.destroy');

//Categories
//Route::resource('/category', CategoriesController::class); tem a msm função
//que o código abaixo..
Route::get('/category', [CategoriesController::class, 'index'])->name('category.index'); 
Route::get('/category/create',[CategoriesController::class,'create'])->name('category.create');
Route::post('/category/store', [CategoriesController::class,'store'])->name('category.store');
Route::get('/category/edit/{category}', [CategoriesController::class,'edit'])->name('category.edit');
Route::post('/category/update/{category}',[CategoriesController::class,'update'])->name('category.update');
Route::get('/category/destroy/{category}',[CategoriesController::class,'destroy'])->name('category.destroy');

//Tags
Route::resource('/tag', TagController::class);
