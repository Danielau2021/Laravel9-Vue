<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\UserController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AuthController::class)->group(function(){
    Route::post('login','login');
    Route::post('register','register');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/get_all_user','get_all_user');
    Route::post('/add_user','add_user');
    Route::post('/update_user/{id}','update_user');
    Route::get('/delete_user/{id}','delete_user');
    Route::get('/profile','profile');
    Route::post('/update_profile/{id}','update_profile');
});
