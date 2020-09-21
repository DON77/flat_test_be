<?php

use App\Http\Controllers\FlatController;
use App\Http\Controllers\JwtAuthController;
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

Route::post('login', [JwtAuthController::class, 'login']);
Route::post('register', [JwtAuthController::class, 'register']);

Route::group(['middleware' => 'auth.jwt'], function () {
    Route::get('logout', [JwtAuthController::class, 'logout']);
    Route::get('flats', [FlatController::class, 'all']);
});

Route::group(['middleware' => 'auth.jwt.verify'], function () {
    Route::post('flats/{id}/favorite', [FlatController::class, 'favorite']);
    Route::post('flats/{id}/unfavorite', [FlatController::class, 'unfavorite']);
});
