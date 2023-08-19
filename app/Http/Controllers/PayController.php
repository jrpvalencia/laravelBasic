<?php

namespace App\Http\Controllers;

use App\Models\Pay;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PayController extends Controller
{
    
    public function index()
    {
        $pago = Pay::all();

        return view('pago.index',compact('pago'));
    
    }
    public function create(){
        return view('pago.create');
    }

    
    public function store(Request $request)
    {
        $pago = new Pay();
        $pago->idPedido=$request->idPedido;
        $pago->idFormaDePago=$request->idFormaDePago;

        $pago->save();


        return Redirect()->route('pago.index',$pago);

    }

    
    public function show(Pay $pay)
    {
        //
    }

    
    public function update(Request $request, Pay $pay)
    {
        //
    }

    
    public function destroy(Pay $pay)
    {
        //
    }
}
