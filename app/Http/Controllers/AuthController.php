<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Laracasts\Flash\Flash;
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

    public function chatRoom()
    {
        return view('auth.chat-room');
    }

    public function menusHasItems()
    {
        return view('auth.menus-has-items');
    }

    public function itemsFromRoutes()
    {
        return view('auth.items-from-routes');
    }

    public function itemsFromRoutesSave(Request $request)
    {
        
        foreach ($request->all()['items_array'] as $value) {
            if($value['name'] != null and $value['icon'] != null and $value['description'] != null){
                $item = new Item;
                $item->name = $value['name'];
                $item->description = $value['description'];
                $item->route = $value['route'];
                $item->icon = $value['icon'];
                $item->save();
            } 
        }

        Flash::success('Items saved successfully.');
        return redirect()->route('auth.items-from-routes');
    }

    
}
