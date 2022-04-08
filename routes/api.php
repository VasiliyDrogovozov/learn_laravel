<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login',[ AuthController::class, 'login' ]);
    Route::post('logout', [ AuthController::class, 'logout' ]);
    Route::post('refresh', [ AuthController::class, 'refresh' ]);
    Route::post('me', [ AuthController::class, 'me' ]);

});

Route::group(['middleware' => 'jwt.auth'], function (){
    Route::get('/posts', \App\Http\Controllers\Post\IndexController::class);
    Route::get('/posts/{post}', \App\Http\Controllers\Post\ShowController::class);
    Route::get('/posts/create', \App\Http\Controllers\Post\CreateController::class);
    Route::post('/posts', \App\Http\Controllers\Post\StoreController::class);
    Route::get('/posts/{post}/edit', \App\Http\Controllers\Post\EditController::class);
    Route::patch('/posts/{post}', \App\Http\Controllers\Post\UpdateController::class);
    Route::delete('/posts/{post}', \App\Http\Controllers\Post\DestroyController::class);
});



