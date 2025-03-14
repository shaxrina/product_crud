<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);
Route::resource('products', ProductController::class);
Route::get('/products/search', [ProductController::class, 'search']);
Route::get('/products/search', [ProductController::class, 'search']);
