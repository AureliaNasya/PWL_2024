<?php

use App\Controllers\Api\RegisterController;
use App\Controllers\Api\LoginController;
use App\Http\Controllers\API\LevelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', App\Http\Controllers\API\RegisterController::class)->name('register');
Route::post('/login', App\Http\Controllers\API\LoginController::class)->name('login');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/logout', App\Http\Controllers\API\LogoutController::class)->name('logout');
Route::get('levels', [LevelController::class, 'index']);
Route::post('levels', [LevelController::class, 'store']);
Route::get('levels/{level}', [LevelController::class, 'show']);
Route::put('levels/{level}', [LevelController::class, 'update']);
Route::delete('levels/{level}', [LevelController::class, 'destroy']);