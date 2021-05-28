<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CartsController;

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

require __DIR__.'/auth.php';


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Route::get('/semlogin', function () {
  //  return view('deslogado');
//})->middleware(['guest']);



//Route::group (['middleware' => 'auth'], function(){
  //carrinho
//});

Route::group(['middleware' => 'isAdmin'], function (){
Route::resource('/product', ProductsController::class, ['except' => ['show']]);
Route::get('/trash/product', [ProductsController::class, 'trash'])->name('product.trash');
Route::patch('/trash/product/{id}', [ProductsController::class, 'restore'])->name('product.restore');



Route::resource('/category', CategoriesController::class, ['except' => ['show']]);
Route::resource('/tag', TagController::class, ['except' => ['show']]);
});

Route::group(['middleware' => 'auth'], function(){
  Route::get('/cart/add/{product}', [CartsController::class, 'add'])->name('cart.add');
  Route::get('/cart/remove/{product}', [CartsController::class, 'remove'])->name('cart.remove');
  Route::get('/cart',  [CartsController::class, 'show'])->name('cart.show');
})

Route::resource('/product',ProductsController::class, ['only' => ['show']]);
Route::resource('/category',CategoriesController::class, ['only' => ['show']]);
Route::resource('/tag', TagController::class, ['only' => ['show']]);






