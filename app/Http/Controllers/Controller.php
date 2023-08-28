<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('inicio');
    }

    public function contactanos()
    {
        return view('contactanos');
    }
    public function conocenos()
    {
        return view('conocenos');
    }
    public function registro2()
    {
        return view('registro2');
    }


    public function login()
    {
        return view('login2');
    }
    public function inicio()
    {
        return view('inicio');
    }

    public function carrito()
    {
        return view('carrito');
    }



}
