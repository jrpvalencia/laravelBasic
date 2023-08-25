<?php

use App\Http\Controllers\CarritoDeCompraController;
use App\Http\Controllers\CompraAgregaController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\cursosController;
use App\Http\Controllers\DevolucionController;
use App\Http\Controllers\FormaDePagoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PqrController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\SeasonController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\TemporadaController;
use App\Http\Controllers\TypePayController;
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

Route::get('/',[Controller::class,'index'])->name('home');


//RUTAS DE PRODUCTOS
Route::post('productos', [ProductoController::class,'store'])->name('producto.store');
Route::get('productos/create',[ProductoController::class,'create'])->name('producto.create');
Route::get('productos/index',[ProductoController::class,'index'])->name('producto.index');
Route::get('productos/{producto}',[ProductoController::class,'show'])->name('producto.show');
Route::delete('productos/{producto}',[ProductoController::class,'destroy'])->name('producto.destroy');

//RUTAS TEMPORADA

Route::post('temporadas', [SeasonController::class,'store'])->name('temporadasStore');
Route::get('temporada/create',[SeasonController::class,'create'])->name('temporada.create');
Route::get('temporadas',[SeasonController::class,'index'])->name('seasons.index');

//RUTAS ROL

Route::post('roles', [RolController::class,'store'])->name('rolesStore');
Route::get('rol/create',[RolController::class,'create'])->name('roles.create');
Route::get('roles',[RolController::class,'index'])->name('rol.index');

//RUTAS DE PQR
Route::get('pqr',[PqrController::class,'index'])->name('pqr.index');
Route::get('pqr/create',[PqrController::class, 'create'])->name('pqr.create');
Route::post('pqr',[PqrController::class, 'store'])->name('pqr.store');


//RUTAS DE CARRITO DE COMPRA
Route::get('carritoDeCompra/create',[ShoppingCartController::class, 'create'])->name('shoppingCart.create');
Route::post('carritoDeCompra',[ShoppingCartController::class,'store'])->name('shoppingCart.store');
Route::get('carritoDeCompra',[ShoppingCartController::class, 'index'])->name('shoppingCart.index');

//RUTA COMPRA AGREGA


Route::get('compraAgrega/create',[CompraAgregaController::class, 'create']);
Route::post('compraAgrega',[CompraAgregaController::class,'store'])->name('compraAgrega.store');

//RUTA DEVOLUCION

Route::get('devolucion/create',[DevolucionController::class, 'create']);
Route::post('devolucion',[DevolucionController::class,'store'])->name('devolucion.store');

//RUTA DE FORMA DE PAGO

Route::get('formaDePago/create',[TypePayController::class, 'create'])->name('typePay.create');;
Route::post('formaDePago',[TypePayController::class,'store'])->name('typePay.store');
Route::get('formaDePago',[TypePayController::class, 'index'])->name('typePay.index');

//RUTAS DE PAGO

Route::get('pago/create',[PagoController::class, 'create'])->name('pagos.create');
Route::post('pago',[PagoController::class,'store'])->name('pago.store');
Route::get('pago',[PagoController::class, 'index'])->name('pago.index');

//RUTAS PEDIDO

Route::get('pedido/create',[PedidoController::class, 'create']);
Route::post('pedido',[PedidoController::class,'store'])->name('pedido.store');

//RUTAS  PROVEE
Route::get('provee/create',[ProveeController::class, 'create']);
Route::post('prove',[ProveeController::class,'store'])->name('provee.store');

//RUTAS USUARIO

Route::get('usuario/create',[usuario::class, 'create']);
Route::post('usuario',[usuario::class,'store'])->name('usuario.store');



//NAVEGABILIDAD

route::get('contactanos',[Controller::class,'contactanos'])->name('contactanos');
route::get('conocenos',[Controller::class,'conocenos'])->name('conocenos');
route::get('registro',[Controller::class,'registro'])->name('registro');
