<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
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

Route::controller(Controller::class)->group(function () {
    Route::get('/', 'index');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/register', 'register');
    Route::get('/login', 'login');
    Route::post('/logout', 'logout');
    Route::post('/users', 'store');
    Route::post('/users/authenticate', 'authenticate');
});

Route::controller(CartController::class)->group(function () {
    
});

Route::controller(ProductController::class)->group(function () {
    
});