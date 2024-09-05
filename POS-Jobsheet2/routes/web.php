<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SaleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::prefix('category')->group(function () {
    Route::get('food-beverage', [ProductController::class, 'index'])->nama('products.food-beverage');
    Route::get('beauty-health', [ProductController::class, 'index'])->nama('products.beauty-health');
    Route::get('home-care', [ProductController::class, 'index'])->nama('products.home-care');
    Route::get('baby-kid', [ProductController::class, 'index'])->nama('products.baby-kid');
});

Route::get('/user/{id}/nama/{nama}', [UserController::class, 'show']);

Route::get('/sales', [SaleController::class, 'index']);
