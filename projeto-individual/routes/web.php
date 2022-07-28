<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::any('/products/busca', [ProductsController::class, 'search'])->name('product.search');
Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('product.destroy');
Route::put('/products/{id}', [ProductsController::class, 'update'])->name('product.update');
Route::get('/products/{id}/edit', [ProductsController::class, 'edit'])->name('product.edit');
Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::post('/products', [ProductsController::class, 'store'])->name('product.store');
Route::get('/products/create', [ProductsController::class, 'create'])->name('product.create');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
