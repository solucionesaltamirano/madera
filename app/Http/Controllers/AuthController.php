<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function welcome()
    {
        return view('auth.welcome');
    }

    public function chat()
    {
        return view('auth.chat');
    }

    public function roomChat()
    {
        return view('auth.room-chat');
    }
}
