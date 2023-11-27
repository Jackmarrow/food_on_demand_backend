<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function topThreeDishes(){
        $menu =  Menu::take(3)->get();

        return response()->json($menu);
    }
}
