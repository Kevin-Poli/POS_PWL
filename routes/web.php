<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [HomeController::class, 'home']);
Route::prefix('category')->group(function (){
    Route::get('/food_baverages', [ProductsController::class,'food_baverages']);
    Route::get('/beauty_health', [ProductsController::class,'beauty_health']);
    Route::get('/home_care', [ProductsController::class,'home_care']);
    Route::get('/baby_kid', [ProductsController::class,'baby_kid']);
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'user']);
Route::get('/penjualan', [PenjualanController::class, 'penjualan']);


