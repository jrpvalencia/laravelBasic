<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\CompraAgregaController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\cursosController;
use App\Http\Controllers\DevolucionController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\NotificationOrderController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PqrController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveeController;
use App\Http\Controllers\ReturnsController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\SeasonController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\TypePayController;
use App\Http\Controllers\UserController;
use App\Models\NotificationOrder;
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
Route::post('productos', [ProductController::class,'store'])->name('producto.store');
Route::get('productos/create',[ProductController::class,'create'])->name('producto.create');
Route::get('productos/index',[ProductController::class,'index'])->name('producto.index');
Route::get('productos/{producto}',[ProductController::class,'show'])->name('producto.show');
Route::delete('productos/{producto}',[ProductController::class,'destroy'])->name('producto.destroy');

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

//RUTA DEVOLUCION

Route::get('devolucion/create',[ReturnsController::class, 'create'])->name('returns.create');
Route::post('devolucion',[ReturnsController::class,'store'])->name('returns.store');
Route::get('devolucion',[ReturnsController::class, 'index'])->name('returns.index');

//RUTA DE FORMA DE PAGO

Route::get('formaDePago/create',[TypePayController::class, 'create'])->name('typePay.create');;
Route::post('formaDePago',[TypePayController::class,'store'])->name('typePay.store');
Route::get('formaDePago',[TypePayController::class, 'index'])->name('typePay.index');

//RUTAS DE PAGO

Route::get('pago/create',[PayController::class, 'create'])->name('pay.create');
Route::post('pago',[PayController::class,'store'])->name('pay.store');
Route::get('pago',[PayController::class, 'index'])->name('pay.index');

//RUTAS PEDIDO

Route::get('pedido/create',[OrderController::class, 'create'])->name('order.create');
Route::post('pedido',[OrderController::class,'store'])->name('order.store');
Route::get('pago',[OrderController::class, 'index'])->name('order.index');

//RUTAs de notificacion pedido

Route::get('notificacionPedido/create',[NotificationOrderController::class, 'create'])->name('notificationOrder.create');
Route::post('notificacionPedido',[NotificationOrderController::class,'store'])->name('notificationOrder.store');
Route::get('notificacionPedido',[NotificationOrderController::class, 'index'])->name('notificationOrder.index');


//RUTAs de NOTIFICACION

Route::get('notificacion/create',[NotificationController::class, 'create'])->name('notification.create');
Route::post('notificacion',[NotificationController::class,'store'])->name('notification.store');
Route::get('notificacion',[NotificationController::class, 'index'])->name('notification.index');

//RUTAs de Favoritos

Route::get('favoritos/create',[FavoriteController::class, 'create'])->name('favorite.create');
Route::post('favoritos',[FavoriteController::class,'store'])->name('favorite.store');
Route::get('favoritos',[FavoriteController::class, 'index'])->name('favorite.index');

//RUTAS USUARIO

Route::get('usuario/create',[UserController::class, 'create'])->name('user.create');
Route::post('usuario',[UserController::class,'store'])->name('user.store');
Route::get('usuario',[UserController::class, 'index'])->name('user.index');


//RUTAS IMAGEN

Route::get('imagen/create',[ImagesController::class, 'create'])->name('image.create');
Route::post('imagen',[ImagesController::class,'store'])->name('image.store');
Route::get('imagen',[ImagesController::class, 'index'])->name('image.index');

//RUTAS COMENTARIO

Route::get('comentario/create',[CommentController::class, 'create'])->name('comment.create');
Route::post('comentario',[CommentController::class,'store'])->name('comment.store');
Route::get('comentario',[CommentController::class, 'index'])->name('comment.index');

//NAVEGABILIDAD

route::get('contactanos',[Controller::class,'contactanos'])->name('contactanos');
route::get('conocenos',[Controller::class,'conocenos'])->name('conocenos');
route::get('registro',[Controller::class,'registro'])->name('registro');
