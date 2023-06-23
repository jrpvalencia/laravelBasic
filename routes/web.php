<?php

use App\Http\Controllers\usuario;
use App\Http\Controllers\RolController;
use App\Http\Controllers\TemporadaController;
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
// Route::get('ami/{num1}/{num2}', [usuario::class,'amigo']);
// Route::get('pri/{num1}', [usuario::class,'primo']);
// Route::get('par/{num1}', [usuario::class,'par']);

Route::post('productos', [ProductoController::class,'store'])->name('productosStore');
Route::get('productos/create',[ProductoController::class,'create']);

Route::post('temporadas', [TemporadaController::class,'store'])->name('temporadasStore');
Route::get('temporada/create',[TemporadaController::class,'create']);

Route::post('roles', [RolController::class,'store'])->name('rolesStore');
Route::get('rol/create',[RolController::class,'create']);

