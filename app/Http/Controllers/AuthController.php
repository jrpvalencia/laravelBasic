<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Exception;
use Illuminate\Support\Facades\Log;


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
            return redirect()->route('login');
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

        // Imprime los datos para depuración


        // Resto del código...



        // Verificar la respuesta de la API
        if ($response->successful() && isset($data['accessToken'])) {
            // Si la solicitud fue exitosa y hay un accessToken en la respuesta, almacena el token en la sesión
            $request->session()->put('auth_token', $data['accessToken']);

            // Almacena otros datos del usuario en la sesión
            $request->session()->put('userData', $data['user']);

            // Obtener roles del usuario
            $responseRoles = Http::withToken($data['accessToken'])->get($apiUrl . 'user-roles');
            $roles = $responseRoles->json();

            // Almacena los roles en la sesión
            $request->session()->put('userRoles', $roles);

            // Mensaje de registro
            \Log::info('User logged in successfully: ' . json_encode($data['user']));


            // Resto del código...

            // Almacena los datos en la sesión
            session(['isLoggedIn' => true, 'userData' => $data['user'], 'auth_token' => $data['accessToken'], 'userRoles' => $data['roles']]);

            // Redirige a la vista de inicio
            return redirect()->route('inicio');
        } // En el bloque else
        else {
            // Si la solicitud no fue exitosa o no hay accessToken en la respuesta, establece la sesión sin datos de usuario
            $request->session()->forget(['auth_token', 'userRoles']);

            // Mensaje de registro
            \Log::error('Login failed: ' . json_encode($response->json()));

            // Redirige de nuevo al formulario de inicio de sesión con un mensaje de error
            return redirect()->back()->with('error', 'Login failed. Incorrect username or password.');
        }
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




    public function getPerfil()
    {
        // Obtener el token de la sesión
        $token = session('auth_token');

        // Verificar si el token existe
        if (!$token) {
            return response()->json(['error' => 'Token de autenticación no encontrado'], 401);
        }

        try {
            // Realizar una solicitud a la API para obtener los datos del perfil
            $apiUrl = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');
            $response = Http::withHeaders(['Authorization' => 'Bearer ' . $token])->get($apiUrl . 'perfil');

            // Verificar si la solicitud fue exitosa (código de estado 2xx)
            if (!$response->successful()) {
                return response()->json(['error' => 'Error al obtener datos del perfil'], $response->status());
            }

            // Obtener los datos del usuario desde la respuesta JSON
            $user = $response->json();

            // Pasar los datos del usuario a la vista 'perfil'
            return view('perfil', compact('user'));
        } catch (\Exception $e) {
            // Manejar cualquier excepción que pueda ocurrir durante la solicitud
            return response()->json(['error' => 'Error al obtener datos del perfil'], 500);
        }
    }


    public function perfil(Request $request)
    {
        // Obtener el token de la sesión
        $token = session('auth_token');

        // Verificar si el token está presente
        if (!$token) {
            return back()->with('error', 'No se encontró el token de autenticación.');
        }

        // Definir la URL base de la API
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        // Realizar la solicitud HTTP con el token en la cabecera
        $response = Http::withToken($token)->put($url . 'usuario/update/' . $request->id, [
            'name' => $request->name,
            'lastName' => $request->lastName,
            'typeDocument' => $request->typeDocument,
            'document' => $request->document,
            'phone' => $request->phone,
            'idRol' => $request->idRol,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // Después de verificar que la solicitud fue exitosa
        if ($response->successful()) {
            // Actualizar la sesión con los nuevos datos del usuario
            session(['userData' => $response->json()['user']]);
            return redirect()->route('perfil');
        } else {
            // La solicitud no fue exitosa, maneja el error según tus necesidades.
            return back()->with('error', 'Hubo un problema al actualizar el perfil.');
        }
    }
}
