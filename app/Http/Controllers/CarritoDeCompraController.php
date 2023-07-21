<?php

namespace App\Http\Controllers;

use App\Models\carritoDeCompra;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarritoDeCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carritoDeCompra = carritoDeCompra::all();

        return view('carritoDeCompra.index', compact('carritoDeCompra'));
    }

    public function create()
    {
        return view('carritoDeCompra.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carritoDeCompra = new carritoDeCompra();
        $carritoDeCompra->idCompraAgrega=$request->idCompraAgrega;
        $carritoDeCompra->cantidadProducto=$request->cantidadProducto;

        $carritoDeCompra->save();

        return Redirect()->route('carritoDeCompra.index',$carritoDeCompra);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\carritoDeCompra  $carritoDeCompra
     * @return \Illuminate\Http\Response
     */
    public function show(carritoDeCompra $carritoDeCompra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\carritoDeCompra  $carritoDeCompra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, carritoDeCompra $carritoDeCompra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\carritoDeCompra  $carritoDeCompra
     * @return \Illuminate\Http\Response
     */
    public function destroy(carritoDeCompra $carritoDeCompra)
    {
        //
    }
}
