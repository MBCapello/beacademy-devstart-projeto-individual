<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::middleware('auth')->group(function ()
{
    Route::any('/nossospets/busca', [ProductsController::class, 'search'])->name('product.search');
    Route::put('/meuperfil/{id}', [UsersController::class, 'update'])->name('user.update');
    Route::get('/meuperfil/{id}/edit', [UsersController::class, 'edit'])->name('user.edit');
    Route::get('/meucarrinho', [UsersController::class, 'productRequest'])->name('user.productRequest');


});

Route::middleware(['auth', 'admin.auth'])->group(function ()
{
    Route::get('/nossospets/create', [ProductsController::class, 'create'])->name('product.create');
    Route::post('/nossospets', [ProductsController::class, 'store'])->name('product.store');
    Route::delete('/nossospets/{id}', [ProductsController::class, 'destroy'])->name('product.destroy');
    Route::get('/nossospets/{id}/edit', [ProductsController::class, 'edit'])->name('product.edit');
    Route::put('/nossospets/{id}', [ProductsController::class, 'update'])->name('product.update');
    Route::get('/listadetutores', [AdminController::class, 'index'])->name('users.index');
    Route::any('/listadetutores/busca', [AdminController::class, 'search'])->name('user.search');
});

Auth::routes();

Route::get('/nossospets', [ProductsController::class, 'index'])->name('products.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

