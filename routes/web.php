<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::view('/about', 'about');
Route::view('/contact', 'contact');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/productDetail/{product}', [App\Http\Controllers\ProductController::class, 'index'])->name('productDetail');
Route::get('/addCart/{id}', [App\Http\Controllers\CartController::class, 'create'])->name('addCart');
Route::get('/cartlist', [App\Http\Controllers\CartController::class, 'index'])->name('cartList');
Route::delete('/cart/delete/{cart}', [App\Http\Controllers\CartController::class, 'destroy'])->name('removeCart');
Route::post('/order/add', [App\Http\Controllers\OrderController::class, 'store'])->name('addOrder');
Route::get('/order/view', [App\Http\Controllers\OrderController::class, 'index'])->name('viewOrder');
