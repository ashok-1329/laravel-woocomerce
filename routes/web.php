<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::get('products', [ProductsController::class, 'index'])->name('products.index');
Route::get('products/{id}', [ProductsController::class, 'show'])->name('products.show');
Route::get('/add-product', [ProductsController::class, 'create'])->name('add_product');
Route::post('/products', [ProductsController::class, 'store'])->name('products.store');




