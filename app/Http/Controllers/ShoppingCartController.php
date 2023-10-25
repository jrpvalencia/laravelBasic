<?php

namespace App\Http\Controllers;

use App\Models\ShoppingCart;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    
    public function index()
    {
        $userID = auth()->id();
        $shoppingCart = ShoppingCart::where('idUser', $userID)->get();

        // return view('shoppingCart.index', compact('shoppingCart'));
        return view('shoppingCart.carrito', compact('shoppingCart'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shoppingCart = new ShoppingCart();
        $shoppingCart->product_quantity=$request->product_quantity;
        $shoppingCart->idUser=$request->idUser;
        $shoppingCart->idProduct=$request->idProduct;
        $shoppingCart->save();


        return Redirect()->route('shoppingCart.index',$shoppingCart);
    }
    public function create()

    {
        $users = User::all();
        $products = Product::all();
        return view('shoppingCart.create',['products'=> $products,'users'=> $users]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function show(ShoppingCart $shoppingCart)
    {
        return view('shoppingCart.show');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShoppingCart $shoppingCart)
    {
        $shoppingCart->idUser = $request->idUser;
        $shoppingCart->idProduct = $request->idProduct;
        $shoppingCart->product_quantity = $request->product_quantity;
    
        $shoppingCart->save();

        return redirect()->route('carritoC', $shoppingCart);
    }
    public function edit(ShoppingCart $shoppingCart){

        $users = User::all();
        $products = Product::all();

        return view('shoppingCart.edit', compact('shoppingCart','users', 'products'));


  
       
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShoppingCart $shoppingCart)
    {
        $shoppingCart->delete();
        return back()->with('succes','Registro eliminado correctamente');
    }

    public function añadir(){
        $id = $_POST['id_product'];
        $product = Product::find($id);
    
        $cantidad  = $_POST['cantidad'];
        $userID = auth()->id();
    
        $shoppingCart = new ShoppingCart();
        $shoppingCart->product_quantity = $cantidad;
        $shoppingCart->idUser = $userID;
        $shoppingCart->idProduct = $id;
        $shoppingCart->save();
    
        // Carga la información del producto para pasarlo a la vista
        $product = Product::find($id);
    
        $shoppingCart = ShoppingCart::where('idUser', $userID)->get();
    
        // Pasa la información del producto a la vista
        return view('carrito', compact('shoppingCart', 'product'));
    }
    
    
}
