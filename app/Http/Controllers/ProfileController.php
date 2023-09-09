<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        $userData = [
            'name' => 'John Muñoz',
            'email' => 'john.mu@example.com',
            'phone' => '123-456-7890',
            'address' => 'barrio la paz',
        ];

        return view('profile', ['userData' => $userData]);
    }
}



