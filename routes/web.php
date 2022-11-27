<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CostumeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegisterController;
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

        Route::get('/costumes/{id}', [CostumeController::class, 'costume']);
    
        Route::get('/orders', [OrderController::class, 'index']);
    
        Route::get('/orders/{id}', [OrderController::class, 'order']);
    
        Route::get('/customers', [CustomerController::class, 'index']);
    
        Route::get('/customers/{id}', [CustomerController::class, 'customer']);

        Route::post('/logout', [LoginController::class, 'logout']);
    });

    Route::middleware('guest')->group(function(){
        Route::get('/login', [LoginController::class, 'index']);
        Route::post('/login', [LoginController::class, 'authentication']);
    });
});

Route::middleware('member')->group(function(){
    Route::post('/logout', [LoginController::class, 'logout']);
});

Route::middleware('guest')->group(function(){
    Route::get('/login', [MemberController::class, 'login']);

    Route::post('/login', [LoginController::class, 'authentication']);

    Route::get('/register', [MemberController::class, 'register']);

    Route::post('/register', [MemberController::class, 'storeMember']);
});

Route::get('/', [MemberController::class, 'index']);

Route::get('/costumes', [CostumeController::class, 'memberIndex']);

Route::get('/costumes/{id}', [CostumeController::class, 'memberCostume']);

Route::get('/get-city', [RegisterController::class, 'getCity']);

Route::get('/insert-kostum', [CostumeController::class, 'insert']);

Route::post('/insert-kostum', [CostumeController::class, 'storeKostum']);

Route::get('/tes', function(){
    return view('test');
});