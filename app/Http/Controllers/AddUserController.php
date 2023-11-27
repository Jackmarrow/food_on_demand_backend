<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AddUserController extends Controller
{
    public function connectedUser()
    {
        $user = Auth::user();

        return response()->json($user);
        
    }
}
