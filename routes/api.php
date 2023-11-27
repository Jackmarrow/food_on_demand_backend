<?php

use App\Http\Controllers\AddUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\MenuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

//Route Home
Route::get('/menu/top_three_pizza', [HomeController::class, 'topThreeDishes']);
Route::get('/connected_user', [AddUserController::class, 'connectedUser']);
Route::get("menus", [MenuController::class,"index"]);
//Route
