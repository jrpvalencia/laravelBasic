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
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        $response = HTTP::get($url.'usuarios');
        $data = $response->json();
       

        return view('user.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');
        $response = Http::get($url . 'usuarios');
        $data = $response->json();
    
        $responseRoles = Http::get($url . 'roles'); // Obtener la lista de roles de la API
        $roles = $responseRoles->json();
    
        return view('user.create', ['usuarios' => $data, 'roles' => $roles]);
    }
    
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        $response = Http::post($url . 'usuario/store',[

            'name' => $request->name,
            'lastName' => $request->lastName,
            'typeDocument' => $request->typeDocument,
            'document' => $request->document,
            'phone' => $request->phone,
            'idRol' => $request->idRol,
            'email' => $request->email,
            'password' => $request->password,
        ]);
     
       

        return redirect()->route('user.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user.show');
    }
    

    public function update(Request $request)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');
    
        $response = Http::put($url . 'usuario/update/' . $request->id, [
            'name' => $request->name,
            'lastName' => $request->lastName,
            'typeDocument' => $request->typeDocument,
            'document' => $request->document,
            'phone' => $request->phone,
          'idRol' => $request->idRol, 
            'email' => $request->email,
             'password' => $request->password, 
        ]);

      
    
        return redirect()->route('user.index');
    }



      public function edit($userId)
      {
          $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');
          
          $response = Http::get($url . 'usuario/edit/' . $userId);
      
          if ($response->successful()) {
              $user = $response->json();
      
              // Obtener todos los roles disponibles
              $rolesResponse = Http::get($url . 'roles');
              $roles = $rolesResponse->json();
      
              $idRol = $user['idRol']; // Establecer el rol actual del usuario
      
              return view('user.edit', compact('user', 'roles', 'idRol'));
      
          } else {
              // Manejo de error si la solicitud a la API no tiene éxito
              return redirect()->back()->with('error', 'No se pudo obtener los datos del usuario');
          }
      }
      
   
   
    public function destroy($idUser)
    {

        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');
        $response = Http::delete($url . 'usuario/destroy/' . $idUser);

        return redirect()->route('user.index');


        
    }
      

}
