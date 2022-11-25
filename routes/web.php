<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CostumeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     session()->put('role', 'admin');
//     return "Dashboard";
// });

Route::prefix('admin')->group(function(){
    Route::middleware('admin')->group(function(){
        Route::get('/', [DashboardController::class, 'index']);
    
        Route::get('/costumes', [CostumeController::class, 'index']);
    
        Route::get('/orders', [OrderController::class, 'index']);
    
        Route::get('/orders/{id}', [OrderController::class, 'order']);
    
        Route::get('/customers', [CustomerController::class, 'index']);
    
        Route::get('/customers/{id}', [CostumeController::class, 'customer']);

        Route::post('/logout', [LoginController::class, 'logout']);
    });

    Route::middleware('guest')->group(function(){
        Route::get('/login', [LoginController::class, 'index']);
        Route::post('/login', [LoginController::class, 'authentication']);
    });
});