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
    return view('inicio');
});

Route::get('/acerca', function () {
    return view('acerca');
});

Route::get('/compras', function () {
    return view('compras');
});

Route::get('/verificar', function () {
    return view('verificar');
});

Auth::routes();

Route::resource('/admin/categorias',App\Http\Controllers\CategoriaController::class)->middleware('auth');
Route::resource('/admin/productos',App\Http\Controllers\ProductoController::class)->middleware('auth');
Route::resource('/admin/proveedores',App\Http\Controllers\ProveedoreController::class)->middleware('auth');
Route::resource('/admin/pagos',App\Http\Controllers\PagoController::class)->middleware('auth');
Route::resource('/admin/clientes',App\Http\Controllers\ClienteController::class)->middleware('auth');
Route::resource('/admin/carritos',App\Http\Controllers\CarritoController::class)->middleware('auth');
Route::resource('/admin/ordenes',App\Http\Controllers\OrdeneController::class)->middleware('auth');
Route::resource('/admin/compras',App\Http\Controllers\CompraController::class)->middleware('auth');

//Route::resource('pedidos',App\Http\Controllers\PedidoController::class)->middleware('auth');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');

Route::group(['middleware' => ['cors']], function () {
    Route::apiResource('api/consumir', App\Http\Controllers\Api\V1\PostController::class)->middleware('api');
    //Rutas a las que se permitirá acceso
});
