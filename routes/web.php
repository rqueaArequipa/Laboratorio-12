<?php

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Producto', [App\Http\Controllers\ProductoController::class, 'index']);
Route::get('/Producto/add', [App\Http\Controllers\ProductoController::class, 'add']);
Route::POST('/Producto/insert', [App\Http\Controllers\ProductoController::class, 'insert']);
Route::get('/Producto/{id}/edit', [App\Http\Controllers\ProductoController::class, 'edit']);
Route::POST('/Producto/update/{id}', [App\Http\Controllers\ProductoController::class, 'update']);
Route::get('/Producto/{id}/delete', [App\Http\Controllers\ProductoController::class, 'delete']);
