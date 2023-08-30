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
        return view('home');
    }

    public function contactanos()
    {
        return view('contactanos');
    }
    public function conocenos()
    {
        return view('conocenos');
    }
    public function registro()
    {
        return view('registro');
    }
    public function catalogo(){
        return view('catalogo');
    }


}
