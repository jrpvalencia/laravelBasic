<?php


use Illuminate\Support\Facades\Http;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\NotificationOrderController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\PQRController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReturnsController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\SeasonController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\TypePayController;
use App\Http\Controllers\UserController;

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

/* Route::get('/',function(){
    $response =Http::get('http://127.0.0.1:8000/api/temporadas');
    $data = $response->json();
    foreach($data as $temporada){
        echo $temporada['name'];
    }
    
});  */
 Route::get('/',[Controller::class,'index'])->name('inicio');  




//RUTAS DE PRODUCTOS
Route::post('/producto/store', [ProductController::class,'store'])->name('product.store');
Route::get('/producto/create',[ProductController::class,'create'])->name('product.create');
Route::get('productos',[ProductController::class,'index'])->name('product.index');
Route::get('/producto/destroy/{idProduct}',[ProductController::class,'destroy'])->name('product.destroy');
Route::get('/producto/edit/{idProduct}', [ProductController::class, 'edit'])->name('product.edit');

Route::post('/producto/update',[ProductController::class, 'update'])->name('product.update');
Route::get('/producto/show',[ProductController::class, 'show'])->name('product.show');

route::get('catalogo',[ProductController::class,'catalogo'])->name('catalogo.index');
Route::get('/producto/primavera', [ProductController::class,'primavera'])->name('primavera');
Route::get('/producto/verano', [ProductController::class,'verano'])->name('verano');
Route::get('/producto/otoño', [ProductController::class,'otoño'])->name('otoño');
Route::get('/producto/invierno', [ProductController::class,'invierno'])->name('invierno');

//RUTAS TEMPORADA

Route::post('/temporada/store', [SeasonController::class,'store'])->name('season.store');
Route::get('/temporada/create',[SeasonController::class,'create'])->name('season.create');
Route::get('/temporadas',[SeasonController::class,'index'])->name('seasons.index');
Route::get('/temporada/destroy/{idSeason}', [SeasonController::class, 'destroy'])->name('season.destroy');
Route::get('/temporada/edit/{idSeason}',[SeasonController::class, 'edit'])->name('season.edit');
Route::post('/temporada/update',[SeasonController::class, 'update'])->name('season.update');
Route::get('/temporada/show',[SeasonController::class, 'show'])->name('season.show');


//RUTAS ROL

Route::post('/rol/store', [RolController::class,'store'])->name('rol.store');
Route::get('/rol/create',[RolController::class,'create'])->name('rol.create');
Route::get('roles',[RolController::class,'index'])->name('rol.index');
Route::get('/rol/destroy/{idRol}', [RolController::class, 'destroy'])->name('rol.destroy');
Route::get('/rol/edit/{idRol}',[RolController::class, 'edit'])->name('rol.edit');
Route::post('/rol/update',[RolController::class, 'update'])->name('rol.update');
Route::get('/rol/show',[RolController::class, 'show'])->name('rol.show');

//RUTAS DE PQR
Route::post('pqr',[PQRController::class, 'store'])->name('pqr.store');
Route::get('pqr/create',[PQRController::class, 'create'])->name('pqr.create');
Route::delete('pqr/{pqr}', [PQRController::class, 'destroy'])->name('pqr.destroy');
Route::get('pqr/{pqr}/edit',[PQRController::class, 'edit'])->name('pqr.edit');
Route::put('pqr/{pqr}',[PQRController::class, 'update'])->name('pqr.update');
Route::get('pqrs',[PQRController::class,'index'])->name('pqrs.index');
Route::get('pqr',[PQRController::class, 'show'])->name('pqr.show');


//RUTAS DE CARRITO DE COMPRA



Route::get('carritoDeCompra/create', [ShoppingCartController::class, 'create'])->name('shoppingCart.create');
Route::get('carritoCompra', [ShoppingCartController::class, 'indexAdmin'])->name('shoppingCart.index');
Route::get('carritoC', [ShoppingCartController::class, 'index'])->name('carritoC');
Route::get('carritoDeCompra/{shoppingCart}/edit', [ShoppingCartController::class, 'edit'])->name('shoppingCart.edit');
Route::get('carritoDeCompras', [ShoppingCartController::class, 'show'])->name('shoppingCart.show');
Route::delete('shoppingCart/{shoppingCart}', [ShoppingCartController::class, 'destroy'])->name('shoppingCart.destroy');
Route::post('carritoDeCompra2', [ShoppingCartController::class, 'store'])->name('shoppingCart.store');
Route::put('carritoDeCompra/{shoppingCart}', [ShoppingCartController::class, 'update'])->name('shoppingCart.update');


Route::post('carrito',[ShoppingCartController::class, 'añadir'])->name('shoppPre');

//RUTA DEVOLUCION

Route::get('devolucion/create',[ReturnsController::class, 'create'])->name('returns.create');
Route::post('devolucion2',[ReturnsController::class,'store'])->name('returns.store');
Route::get('devolucion',[ReturnsController::class, 'index'])->name('returns.index');
Route::delete('devolucion/{returns}', [ReturnsController::class, 'destroy'])->name('returns.destroy');
Route::get('devolucion/{returns}/edit',[ReturnsController::class, 'edit'])->name('returns.edit');
Route::put('devolucion/{returns}',[ReturnsController::class, 'update'])->name('returns.update');
Route::get('devoluciones',[ReturnsController::class, 'show'])->name('returns.show');

//RUTA DE FORMA DE PAGO

Route::get('formaDePago/create',[TypePayController::class, 'create'])->name('typePay.create');;
Route::post('formaDePago2',[TypePayController::class,'store'])->name('typePay.store');
Route::get('formaDePagoS',[TypePayController::class, 'index'])->name('typePay.index');
Route::delete('formaDePago/{typePay}', [TypePayController::class, 'destroy'])->name('typePay.destroy');
Route::get('formaDePago/{typePay}/edit',[TypePayController::class, 'edit'])->name('typePay.edit');
Route::put('formaDePago/{typePay}',[TypePayController::class, 'update'])->name('typePay.update');
Route::get('formaDePago',[TypePayController::class, 'show'])->name('typePay.show');

//RUTAS DE PAGO

Route::get('pago/create',[PayController::class, 'create'])->name('pay.create');
Route::post('pago2',[PayController::class,'store'])->name('pay.store');
Route::get('pago',[PayController::class, 'index'])->name('pay.index');
Route::delete('pago/{pay}', [PayController::class, 'destroy'])->name('pay.destroy');
Route::get('pago/{pay}/edit',[PayController::class, 'edit'])->name('pay.edit');
Route::put('pago/{pay}',[PayController::class, 'update'])->name('pay.update');
Route::get('pagos',[PayController::class, 'show'])->name('pay.show');

//RUTAS PEDIDO

Route::get('pedido/create',[OrderController::class, 'create'])->name('order.create');
Route::post('pedido2',[OrderController::class,'store'])->name('order.store');
Route::get('pedidos',[OrderController::class, 'index'])->name('order.index');
Route::delete('pedido/{order}', [OrderController::class, 'destroy'])->name('order.destroy');
Route::get('pedido/{order}/edit',[OrderController::class, 'edit'])->name('order.edit');
Route::put('pedido/{order}',[OrderController::class, 'update'])->name('order.update');
Route::get('pedido',[OrderController::class, 'show'])->name('order.show');

//RUTAs de notificacion pedido

Route::get('notificacionPedido/create',[NotificationOrderController::class, 'create'])->name('notificationOrder.create');
Route::post('notificacionPedido2',[NotificationOrderController::class,'store'])->name('notificationOrder.store');
Route::get('notificacionPedido',[NotificationOrderController::class, 'index'])->name('notificationOrder.index');
Route::delete('notificacionPedido/{notificationOrder}', [NotificationOrderController::class, 'destroy'])->name('notificationOrder.destroy');
Route::get('notificacionPedido/{notificationOrder}/edit',[NotificationOrderController::class, 'edit'])->name('notificationOrder.edit');
Route::put('notificacionPedido/{notificationOrder}',[NotificationOrderController::class, 'update'])->name('notificationOrder.update');
Route::get('notificacionPedido',[NotificationOrderController::class, 'show'])->name('notificationOrder.show');

//RUTAs de NOTIFICACION

Route::get('notificacion/create',[NotificationController::class, 'create'])->name('notification.create');
Route::post('notificacion2',[NotificationController::class,'store'])->name('notification.store');
Route::get('notificacion',[NotificationController::class, 'index'])->name('notification.index');
Route::delete('notificacion/{notification}', [NotificationController::class, 'destroy'])->name('notification.destroy');
Route::get('notificacion/{notification}/edit',[NotificationController::class, 'edit'])->name('notification.edit');
Route::put('notificacion/{notification}',[NotificationController::class, 'update'])->name('notification.update');
Route::get('notificacion',[NotificationController::class, 'show'])->name('notification.show');

//RUTAs de Favoritos

Route::get('favoritos/create',[FavoriteController::class, 'create'])->name('favorite.create');
Route::post('favoritos2',[FavoriteController::class,'store'])->name('favorite.store');
Route::get('favoritos',[FavoriteController::class, 'index'])->name('favorite.index');
Route::delete('favoritos/{favorite}', [FavoriteController::class, 'destroy'])->name('favorite.destroy');
Route::get('favoritos/{favorite}/edit',[FavoriteController::class, 'edit'])->name('favorite.edit');
Route::put('favoritos/{favorite}',[FavoriteController::class, 'update'])->name('favorite.update');
Route::get('favoritos',[FavoriteController::class, 'show'])->name('favorite.show');

//RUTAS USUARIO

Route::post('/usuario/store',[UserController::class,'store'])->name('user.store');
Route::get('/usuario/create',[UserController::class, 'create'])->name('user.create');
Route::get('usuarios',[UserController::class, 'index'])->name('user.index');
Route::get('/usuario/destroy/{idUser}', [UserController::class, 'destroy'])->name('user.destroy');
Route::get('/usuario/edit/{userId}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/usuario/update',[UserController::class, 'update'])->name('user.update');
Route::get('/usuario/show',[UserController::class, 'show'])->name('user.show'); 

Route::put('usuario/{user}',[UserController::class, 'updatePerfil'])->name('user.updatePerfil');
Route::get('perfil', [UserController::class, 'shows'])->name('perfil');
//RUTAS IMAGEN

Route::get('imagen/create',[ImagesController::class, 'create'])->name('image.create');
Route::post('imagen',[ImagesController::class,'store'])->name('image.store');
Route::get('imagen',[ImagesController::class, 'index'])->name('image.index');
Route::delete('imagen/{images_id}/{images_type}', [ImagesController::class, 'destroy'])->name('image.destroy');
Route::get('imagen/{images_id}/{images_type}/edit', [ImagesController::class, 'edit'])->name('image.edit');
Route::put('imagen/{images_id}/{images_type}', [ImagesController::class, 'update'])->name('image.update');
Route::get('imagen',[ImagesController::class, 'show'])->name('image.show');

//RUTAS COMENTARIO

Route::get('comentario/create',[CommentController::class, 'create'])->name('comment.create');
Route::post('comentario2',[CommentController::class,'store'])->name('comment.store');
Route::get('comentario',[CommentController::class, 'index'])->name('comment.index');
Route::delete('comentario/{comment}', [CommentController::class, 'destroy'])->name('comment.destroy');
Route::get('comentario/{comment}/edit',[CommentController::class, 'edit'])->name('comment.edit');
Route::put('comentario/{comment}',[CommentController::class, 'update'])->name('comment.update');
Route::get('comentario',[CommentController::class, 'show'])->name('comment.show');
//NAVEGABILIDAD

route::get('contactanos',[Controller::class,'contactanos'])->name('contactanos');

route::get('formaPago',[Controller::class,'pago'])->name('pago');
route::get('conocenos',[Controller::class,'conocenos'])->name('conocenos');
route::get('registro',[Controller::class,'registro'])->name('registro');




route::get('login',[Controller::class,'login'])->name('login');
route::post('login',[UserController::class,'validation'])->name('loginValidation');
route::get('logout',[UserController::class,'destroySesion'])->name('loginDestroy');

route::get('inicio',[Controller::class,'inicio'])->name('inicio');

route::get('registro2',[Controller::class,'registro2'])->name('registro2');