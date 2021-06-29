<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Models\User;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('register', '\App\Http\Controllers\AuthController@register');
Route::post('login', '\App\Http\Controllers\AuthController@login');

Route::middleware('auth:api')->group(function() {

    // Show the details of certain user
    Route::get('user/{userId}/detail', '\App\Http\Controllers\UserController@showDetail');

    // List all users
    Route::get('users', '\App\Http\Controllers\UserController@showAll');

    // Add user
    Route::post('/user/{userId}/addUser', '\App\Http\Controllers\UserController@addUser');
    
    // Update user
    Route::put('/user/{userId}/updateDetail', '\App\Http\Controllers\UserController@updateDetail');

    // Delete User
    Route::delete('user/{id}', '\App\Http\Controllers\UserController@destroy');
});