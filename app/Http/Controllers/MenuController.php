<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\MenuSize;
use App\Models\Size;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        $menus = Menu::with('sizes', 'ingredients')->get();
        $categories = Category::all();
        $sizes = MenuSize::all();

        return response()->json([
            'menus' => $menus,
            'categories' => $categories,
            'sizes' => $sizes ,
        ]);
    }
}
