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
    return view('home');
    //return view('auth.login');
});

Auth::routes();

Route::resource('categorias',App\Http\Controllers\CategoriaController::class)->middleware('auth');
Route::resource('productos',App\Http\Controllers\ProductoController::class)->middleware('auth');
Route::resource('proveedores',App\Http\Controllers\ProveedoreController::class)->middleware('auth');
Route::resource('pagos',App\Http\Controllers\PagoController::class)->middleware('auth');
Route::resource('clientes',App\Http\Controllers\ClienteController::class)->middleware('auth');
Route::resource('pedidos',App\Http\Controllers\PedidoController::class)->middleware('auth');
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');

