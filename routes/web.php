<?php

use App\Http\Controllers\ChatsController;
use App\Http\Controllers\CommentController;
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
use App\Http\Controllers\TemporadaController;
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


Route::get('curso/create',[cursosController::class,'create'])->name('curso.create');
Route::post('cursos', [cursosController::class,'store'])->name('cursos.store');
Route::get('cursos',[cursosController::class,'index'])->name('cursos.index');
Route::get('yo',[cursosController::class,'destroy'])->name('destroy.store');
//RUTAS DE PRODUCTOS
Route::post('productos', [ProductoController::class,'store'])->name('producto.store');
Route::get('productos/create',[ProductoController::class,'create'])->name('producto.create');
Route::get('productos/index',[ProductoController::class,'index'])->name('producto.index');
Route::get('productos/{producto}',[ProductoController::class,'show'])->name('producto.show');
Route::delete('productos/{producto}',[ProductoController::class,'destroy'])->name('producto.destroy');

//RUTAS TEMPORADA

Route::post('temporadas', [TemporadaController::class,'store'])->name('temporadasStore');
Route::get('temporada/create',[TemporadaController::class,'create'])->name('temporada.create');
Route::get('temporadas',[TemporadaController::class,'index'])->name('temporadas.index');

//RUTAS ROL

Route::post('roles', [RolController::class,'store'])->name('rolesStore');
Route::get('rol/create',[RolController::class,'create'])->name('roles.create');
Route::get('roles',[RolController::class,'index'])->name('rol.index');

//RUTAS DE PQR
Route::get('pqr',[PqrController::class,'index'])->name('pqr.index');
Route::get('pqr/create',[PqrController::class, 'create'])->name('pqr.create');
Route::post('pqr',[PqrController::class, 'store'])->name('pqr.store');


//RUTAS DE CARRITO DE COMPRA
Route::get('carritoDeCompra/create',[CarritoDeCompraController::class, 'create'])->name('carritoDeCompra.create');
Route::post('carritoDeCompra',[CarritoDeCompraController::class,'store'])->name('carritoDeCompra.store');
Route::get('carritoDeCompra',[CarritoDeCompraController::class, 'index'])->name('carritoDeCompra.index');

//RUTA COMPRA AGREGA


Route::get('compraAgrega/create',[CompraAgregaController::class, 'create'])->name('compraAgrega.create');
Route::post('compraAgrega',[CompraAgregaController::class,'store'])->name('compraAgrega.store');
Route::get('compraAgrega',[CompraAgregaController::class, 'index'])->name('compraAgrega.index');
//RUTA DEVOLUCION

Route::get('devolucion/create',[DevolucionController::class, 'create'])->name('devoluciones.create');
Route::post('devolucion',[DevolucionController::class,'store'])->name('devolucion.store');
Route::get('devolucion',[DevolucionController::class, 'index'])->name('devoluciones.index');

//RUTA DE FORMA DE PAGO

Route::get('formaDePago/create',[FormaDePagoController::class, 'create'])->name('formaDePago.create');
Route::post('formaDePago',[FormaDePagoController::class,'store'])->name('formaDePago.store');
Route::get('formaDePago',[FormaDePagoController::class, 'index'])->name('formaDePago.index');
//RUTAS DE PAGO

Route::get('pago/create',[PagoController::class, 'create'])->name('pagos.create');
Route::post('pago',[PagoController::class,'store'])->name('pago.store');
Route::get('pago',[PagoController::class, 'index'])->name('pago.index');

//RUTAS PEDIDO

Route::get('pedido/create',[PedidoController::class, 'create'])->name('pedido.create');
Route::post('pedido',[PedidoController::class,'store'])->name('pedido.store');
Route::get('pedido',[PedidoController::class, 'index'])->name('pedido.index');

//RUTAS  PROVEE
Route::get('provee/create',[ProveeController::class, 'create'])->name('provee.create');
Route::post('prove',[ProveeController::class,'store'])->name('provee.store');
Route::get('provee',[ProveeController::class, 'index'])->name('provee.index');


//RUTAS USUARIO

Route::get('usuario/create',[usuario::class, 'create']);
Route::post('usuario',[usuario::class,'store'])->name('usuario.store');






//NAVEGABILIDAD

route::get('contactanos',[Controller::class,'contactanos'])->name('contactanos');
route::get('conocenos',[Controller::class,'conocenos'])->name('conocenos');
route::get('registro',[Controller::class,'registro'])->name('registro');

//diana
Route::get('/products/{producto}',[ProductController::class,'show'])->name('products.show');
Route::get('/products/{id}',[ProductController::class,'show'])->name('products.show');


//chat
Route::get('chats', [ChatsController::class,'chats'])->name('chats.chats');

Route::get('/login', function () {
    return view('login');
});
