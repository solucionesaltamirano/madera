<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    public function test()
    {
        return view('test');
    }
    
    public function welcome()
    {
        return view('auth.welcome');
    }

    public function chat()
    {
        return view('auth.chat');
    }

    public function chatRoom()
    {
        return view('auth.chat-room');
    }

    public function menusHasItems()
    {
        return view('auth.menus-has-items');
    }
    
}
