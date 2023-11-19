<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{

    public function createUser()
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');
        
        // Obtener usuarios
        $response = Http::get($url . 'usuarios');
        $usuarios = $response->json();
    
        // Obtener roles
        $responseRoles = Http::get($url . 'roles'); 
        $roles = $responseRoles->json();
    
        return view('user.create', compact('usuarios', 'roles'));
    }
    

    public function register(Request $request)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        $response = Http::post($url . 'register', [
            'name' => $request->name,
            'lastName' => $request->lastName,
            'typeDocument' => $request->typeDocument,
            'document' => $request->document,
            'phone' => $request->phone,
            'idRol' => $request->idRol, 
            'email' => $request->email,
            'password' => $request->password,
        ]);

    

        // Verificar la respuesta de la API
        if ($response->successful()) {
            $data = $response->json();

            // Almacena el token en la sesión
            session(['auth_token' => $data['access_token']]);

            // Manejar la respuesta como desees, por ejemplo, redirigir al usuario
            return redirect()->route('user.index');
        } else {
            // Si la solicitud no fue exitosa, manejar el error
            return response()->json(['error' => 'Error al registrar el usuario'], $response->status());
        }
    }


    public function login()
    {
        return view('login');
    }


    public function logins(Request $request)
    {
        // Obtén las credenciales del formulario de inicio de sesión
        $credentials = $request->only('email', 'password');

        // URL de la API
        $apiUrl = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        // Enviar solicitud POST a la API logins
        $response = Http::post($apiUrl . 'logins', $credentials);
        $data = $response->json();

        // Verificar la respuesta de la API
        if ($response->successful() && isset($data['accessToken'])) {
            // Si la solicitud fue exitosa y hay un accessToken en la respuesta, pasa el nombre del usuario y el token a la sesión
            session(['isLoggedIn' => true, 'userData' => $data['user'], 'auth_token' => $data['accessToken']]);
        } else {
            // Si la solicitud no fue exitosa o no hay accessToken en la respuesta, establece la sesión sin datos de usuario
            session(['isLoggedIn' => false, 'userData' => null, 'auth_token' => null]);
        }

        // Redirige a la vista de inicio
        return redirect()->route('inicio');
    }



    public function logout()
    {
        // Obten el token de autenticación almacenado en la sesión
        $token = session('auth_token');

        // Verifica si hay un token almacenado
        if ($token) {
            // Realiza una solicitud a la API para revocar el token
            $apiUrl = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');
            $response = Http::withHeaders(['Authorization' => 'Bearer ' . $token])->get($apiUrl . 'logout');

            // Verifica si la solicitud a la API fue exitosa
            if ($response->successful()) {
                // Limpia la sesión del usuario y cierra sesión localmente
                session(['isLoggedIn' => false, 'userData' => null, 'auth_token' => null]);
                return redirect()->route('inicio'); // Redirige a la vista de inicio u otra vista según tu aplicación
            }
        }

        // Si algo salió mal, simplemente redirige a la vista de inicio
        return redirect()->route('inicio');
    }
}
