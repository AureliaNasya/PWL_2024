<?php

use App\Controllers\Api\RegisterController;
use App\Controllers\Api\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', App\Http\Controllers\API\RegisterController::class)->name('register');
Route::post('/login', App\Http\Controllers\API\LoginController::class)->name('login');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/logout', App\Http\Controllers\API\LogoutController::class)->name('logout');