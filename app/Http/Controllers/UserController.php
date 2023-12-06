<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rol;
use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Verificar si el usuario está autenticado y tiene el rol "admin"
        
            $url = env('URL_SERVER_API');
    
            $response = Http::get($url . 'usuarios');
    
    
            if ($response->successful()) {
                $data = $response->json();
                return view('user.index', compact('data'));
            } else {
                // Manejar el error, por ejemplo, redirigir o mostrar un mensaje
                return view('error')->with('message', 'Error al obtener datos de usuarios: ' . $response->status());
            }
        
    }
    

    public function destroy($idUser)
    {

        $url = env('URL_SERVER_API');
        $response = Http::delete($url . 'usuario/destroy/' . $idUser);

        return redirect()->route('user.index');


        
    }


   

}
