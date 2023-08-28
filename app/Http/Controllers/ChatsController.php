<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatsController extends Controller
{
    // public function __construct()

    // {
    //     $this->middleware('auth');
    // }
    public function chats()
    {
        return view('chats');
    }
}
