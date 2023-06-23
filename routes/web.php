<?php

use App\Http\Controllers\PqrController;
use App\Http\Controllers\usuario;
use App\Http\Controllers\ProductoController;
use App\Models\producto;
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

//rutas prueba
Route::get('ami/{num1}/{num2}', [usuario::class,'amigo']);
Route::get('pri/{num1}', [usuario::class,'primo']);
Route::get('par/{num1}', [usuario::class,'par']);

Route::post('productos', [ProductoController::class,'store'])->name('productosStore');
Route::get('productos/create',[ProductoController::class,'create']);
Route::get('pqr',[PqrController::class,'index'])->name('pqr.index');

Route::get('pqr/create',[PqrController::class, 'create'])->name('pqr.create');
Route::post('pqr',[PqrController::class, 'store'])->name('pqr.store');
