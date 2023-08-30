<?php

namespace App\Http\Controllers;

use App\Models\ShoppingCart;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoppingCart = ShoppingCart::all();

        return view('shoppingCart.index', compact('shoppingCart'));
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
        //
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

        return redirect()->route('shoppingCart.index', $shoppingCart);
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
}
