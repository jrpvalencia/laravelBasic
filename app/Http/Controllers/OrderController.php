<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{


    public function index()
    {
        $url = env('URL_SERVER_API');


        $response = Http::get($url . 'pedidos');
        $data = $response->json();



        return view('order.index', compact('data'));
    }





    public function store(Request $request)
    {
        $idShoppingCart = $request->input('idShoppingCart');
        $idTypePay = $request->input('metodo_pago');
        $totalCarrito = $request->input('totalCarrito');
    

        
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');
    
        $response = Http::post($url . 'pedido/store', [
            'idShoppingCart' => $idShoppingCart,
            'idTypePay' => $idTypePay,
        ]);
    
        $order = $response->json(); 
    
        return Redirect()->route('order.show', ['order' => $order['id'], 'totalCarrito' => $totalCarrito]);
    }
    




    public function show($order, $totalCarrito)
    {

        
        $url = env('URL_SERVER_API');
    
        $response = Http::get($url . 'pedido/show/' . $order);
        $data = $response->json();
    
        
    
        return view('order.index', compact('data', 'totalCarrito'));
    }
    

    


    /*  public function destroy(Order $order)
    {
        $order->delete();
        return back()->with('succes','Registro eliminado correctamente');
    } */
}
