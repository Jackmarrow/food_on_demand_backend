<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\User;
use Illuminate\Http\Request;

class AddOrderController extends Controller
{
    public function products($id){
        $products = User::with('menus')->get()->where('id',$id)->first();
        return response()->json($products);
    }

    public function store(Request $request)
    {
        $validator = validator(
            $request->all(),
            [
                'user_id' => 'required',
                'menu_id' => 'required',
            ]
        );

        if($validator->fails()){
            return response()->json(['error' => $validator->errors()->first()]);
        }

        Basket::create([
            'user_id' => $request->user_id,
            'menu_id' => $request->menu_id
        ]);

        return response()->json(['success'=> 'The item has been added']);
    }

    public function destroy($id){

        $response = Basket::where('menu_id', $id);
        return response()->json($response);
        return response()->json(['success' => 'An item has been deleted']);
    }
}
