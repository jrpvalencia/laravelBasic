<?php

use App\Http\Controllers\usuario;
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
