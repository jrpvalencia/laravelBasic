<?php

namespace App\Http\Controllers;

use App\Models\ShoppingCart;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class ShoppingCartController extends Controller
{




    public function index()
    {

        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        $response =  Http::get($url.'carritoDeCompras');

        $data = $response->json();

        return view('shoppingCart.carrito', compact('data'));

    }

    public function agregarProducto(Request $request)
    {
       
        try {
            $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');
     
            // Obtener el token de la solicitud
            $token = $request->auth_token;
    
            // Verificar si el token existe y es válido
            if (!$token || !is_string($token)) {
                return redirect()->back()->with('error', 'Token de autenticación no válido');
            }
    
            // Antes de hacer la solicitud HTTP
    
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token,
            ])->post($url . 'carritoDeCompra/agregarProducto', [
                'idProduct' => $request->idProduct,
                'product_quantity' => $request->product_quantity,
            ]);
            
    
            if ($response->successful()) {
                // Éxito, redirigir a una ruta específica
                return Redirect::route('shoppingCart.index')->with('mensaje', 'Operación exitosa'); // Reemplaza 'nombre_de_la_ruta' con el nombre de tu ruta
            } else {
             
                return redirect()->back()->with('error', 'Error en la API: ' . $response->body());
            }
        }  catch (\Exception $e) {
       
            return redirect()->back()->with('error', 'Error general: ' . $e->getMessage());
        } 
  
}


public function destroy($shoppingCart)
{
 
    $token = session('auth_token');

    
    if (!$token) {
        return response()->json(['error' => 'Token no presente'], 401);
    }

    $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');
   
    $response = Http::withHeaders(['Authorization' => 'Bearer ' . $token])->delete($url . 'carritoDeCompra/destroy/' . $shoppingCart);

    return redirect()->route('shoppingCart.index');
}




}
