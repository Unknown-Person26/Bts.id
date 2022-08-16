<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\UserController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group(['middleware' => 'auth:sanctum'], function () {
    //All secure URL's
    Route::get("list/{id?}", [ShoppingController::class, "list"]);
    Route::get("search/{name}", [ShoppingController::class, "search"]);
    Route::post("add", [ShoppingController::class, "add"]);
    Route::put("update", [ShoppingController::class, "update"]);
    Route::delete("delete/{id}", [ShoppingController::class, "delete"]);
});


Route::post("login", [UserController::class, 'login']);
