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
use JetBrains\PhpStorm\Immutable;

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

Route::get('/',[Controller::class,'index'])->name('inicio');


Route::get('curso/create',[cursosController::class,'create'])->name('curso.create');
Route::post('cursos', [cursosController::class,'store'])->name('cursos.store');
Route::get('cursos',[cursosController::class,'index'])->name('cursos.index');
Route::get('yo',[cursosController::class,'destroy'])->name('destroy.store');
//RUTAS DE PRODUCTOS
Route::post('productos', [ProductController::class,'store'])->name('product.store');
Route::get('productos/create',[ProductController::class,'create'])->name('product.create');
Route::get('productos/index',[ProductController::class,'index'])->name('product.index');
Route::get('productos/{product}',[ProductController::class,'show'])->name('product.show');
Route::delete('productos/{product}',[ProductController::class,'destroy'])->name('product.destroy');

//RUTAS TEMPORADA

Route::post('temporadas2', [SeasonController::class,'store'])->name('temporadasStore');
Route::get('temporada/create',[SeasonController::class,'create'])->name('temporada.create');
Route::get('temporadas',[SeasonController::class,'index'])->name('seasons.index');
Route::delete('temporadas/{season}', [SeasonController::class, 'destroy'])->name('season.destroy');

//RUTAS ROL

Route::post('roles', [RolController::class,'store'])->name('rolesStore');
Route::get('rol/create',[RolController::class,'create'])->name('roles.create');
Route::get('roles',[RolController::class,'index'])->name('rol.index');
Route::delete('roles/{rol}', [RolController::class, 'destroy'])->name('rol.destroy');

//RUTAS DE PQR
Route::get('pqr',[PqrController::class,'index'])->name('pqr.index');
Route::get('pqr/create',[PqrController::class, 'create'])->name('pqr.create');
Route::post('pqr',[PqrController::class, 'store'])->name('pqr.store');
Route::delete('pqr/{pqr}', [PqrController::class, 'destroy'])->name('pqr.destroy');


//RUTAS DE CARRITO DE COMPRA
Route::get('carritoDeCompra/create',[ShoppingCartController::class, 'create'])->name('shoppingCart.create');
Route::post('carritoDeCompra2',[ShoppingCartController::class,'store'])->name('shoppingCart.store');
Route::get('carritoDeCompra',[ShoppingCartController::class, 'index'])->name('shoppingCart.index');
Route::delete('carritoDeCompra/{shoppingCart}', [ShoppingCartController::class, 'destroy'])->name('shoppingCart.destroy');

//RUTA DEVOLUCION

Route::get('devolucion/create',[ReturnsController::class, 'create'])->name('returns.create');
Route::post('devolucion2',[ReturnsController::class,'store'])->name('returns.store');
Route::get('devolucion',[ReturnsController::class, 'index'])->name('returns.index');
Route::delete('devolucion/{returns}', [ReturnsController::class, 'destroy'])->name('returns.destroy');

//RUTA DE FORMA DE PAGO

Route::get('formaDePago/create',[TypePayController::class, 'create'])->name('typePay.create');;
Route::post('formaDePago2',[TypePayController::class,'store'])->name('typePay.store');
Route::get('formaDePago',[TypePayController::class, 'index'])->name('typePay.index');
Route::delete('formaDePago/{typePay}', [TypePayController::class, 'destroy'])->name('typePay.destroy');
Route::get('formaDePago/{typePay}/edit',[TypePayController::class, 'edit'])->name('typePay.edit');
Route::put('formaDePago/{typePay}',[TypePayController::class, 'update'])->name('typePay.update');


//RUTAS DE PAGO

Route::get('pago/create',[PayController::class, 'create'])->name('pay.create');
Route::post('pago2',[PayController::class,'store'])->name('pay.store');
Route::get('pago',[PayController::class, 'index'])->name('pay.index');
Route::delete('pago/{pay}', [PayController::class, 'destroy'])->name('pay.destroy');

//RUTAS PEDIDO

Route::get('pedido/create',[OrderController::class, 'create'])->name('order.create');
Route::post('pedido2',[OrderController::class,'store'])->name('order.store');
Route::get('pedido',[OrderController::class, 'index'])->name('order.index');
Route::delete('pedido/{order}', [OrderController::class, 'destroy'])->name('order.destroy');

//RUTAs de notificacion pedido

Route::get('notificacionPedido/create',[NotificationOrderController::class, 'create'])->name('notificationOrder.create');
Route::post('notificacionPedido2',[NotificationOrderController::class,'store'])->name('notificationOrder.store');
Route::get('notificacionPedido',[NotificationOrderController::class, 'index'])->name('notificationOrder.index');
Route::delete('notificacionPedido/{notificationOrder}', [NotificationOrderController::class, 'destroy'])->name('notificationOrder.destroy');


//RUTAs de NOTIFICACION

Route::get('notificacion/create',[NotificationController::class, 'create'])->name('notification.create');
Route::post('notificacion2',[NotificationController::class,'store'])->name('notification.store');
Route::get('notificacion',[NotificationController::class, 'index'])->name('notification.index');
Route::delete('notificacion/{notification}', [NotificationController::class, 'destroy'])->name('notification.destroy');

//RUTAs de Favoritos

Route::get('favoritos/create',[FavoriteController::class, 'create'])->name('favorite.create');
Route::post('favoritos2',[FavoriteController::class,'store'])->name('favorite.store');
Route::get('favoritos',[FavoriteController::class, 'index'])->name('favorite.index');
Route::delete('favoritos/{favorite}', [FavoriteController::class, 'destroy'])->name('favorite.destroy');

//RUTAS USUARIO

Route::get('usuario/create',[UserController::class, 'create'])->name('user.create');
Route::post('usuario2',[UserController::class,'store'])->name('user.store');
Route::get('usuario',[UserController::class, 'index'])->name('user.index');
Route::delete('usuario/{user}', [UserController::class, 'destroy'])->name('user.destroy');


//RUTAS IMAGEN

Route::get('imagen/create',[ImagesController::class, 'create'])->name('image.create');
Route::post('imagen2',[ImagesController::class,'store'])->name('image.store');
Route::get('imagen',[ImagesController::class, 'index'])->name('image.index');
Route::delete('imagen/{images_id}/{images_type}', [ImagesController::class, 'destroy'])->name('image.destroy');


//RUTAS COMENTARIO

Route::get('comentario/create',[CommentController::class, 'create'])->name('comment.create');
Route::post('comentario2',[CommentController::class,'store'])->name('comment.store');
Route::get('comentario',[CommentController::class, 'index'])->name('comment.index');
Route::delete('comentario/{comment}', [CommentController::class, 'destroy'])->name('comment.destroy');

//NAVEGABILIDAD

route::get('contactanos',[Controller::class,'contactanos'])->name('contactanos');
route::get('conocenos',[Controller::class,'conocenos'])->name('conocenos');
route::get('registro',[Controller::class,'registro'])->name('registro');

route::get('carrito',[ShoppingCartController::class,'index'])->name('carrito');

route::get('login',[Controller::class,'login'])->name('login');
route::post('login',[UserController::class,'validation'])->name('loginValidation');

route::get('inicio',[Controller::class,'inicio'])->name('inicio');