<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CostumeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\CalendarController;
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

        Route::get('/costume/{id}/delete', [CostumeController::class, 'deleteCostume']);

        Route::post('/costume/insert-costume', [CostumeController::class, 'insertCostume']);
    
        Route::get('/orders', [OrderController::class, 'index']);
    
        Route::get('/orders/{id}', [OrderController::class, 'order']);
    
        Route::get('/customers', [CustomerController::class, 'index']);
    
        Route::get('/customers/{id}', [CustomerController::class, 'customer']);

        Route::post('/update-costume', [CostumeController::class, 'updateCostume']);
        
        Route::post('/logout', [LoginController::class, 'logout']);

        Route::get('/calendar', [CalendarController::class, 'index']);
    });

    Route::middleware('guest')->group(function(){
        Route::get('/login', [LoginController::class, 'index']);
        Route::post('/login', [LoginController::class, 'authentication']);
    });
});

Route::middleware('member')->group(function(){
    Route::get('/cart/{username}', [CartController::class, 'index'])->middleware('cart');

    Route::post('/logout', [LoginController::class, 'logout']);

    Route::get('/storeCart', [CartController::class, 'storeCart']);

    Route::post('/delete-item', [CartController::class, 'deleteItem']);

    Route::post('/checkout', [CartController::class, 'checkOut']);

    Route::get('/invoice/{order_id}', [InvoiceController::class, 'index']);

    Route::get('/orders', [OrderController::class, 'memberOrders'])->middleware('cart');

    Route::get('/order/{order_id}', [OrderController::class, 'memberOrder'])->middleware('cart');
});

Route::middleware('guest')->group(function(){
    Route::get('/login', [MemberController::class, 'login']);

    Route::post('/login', [LoginController::class, 'authentication']);

    Route::get('/register', [MemberController::class, 'register']);

    Route::post('/register', [MemberController::class, 'storeMember']);
});

Route::middleware('cart')->group(function(){
    Route::get('/', [MemberController::class, 'index']);
    
    Route::get('/costumes', [CostumeController::class, 'memberIndex']);
    
    Route::get('/costumes/{id}', [CostumeController::class, 'memberCostume']);
});

Route::get('/get-city', [RegisterController::class, 'getCity']);

Route::get('/get-payment', [CartController::class, 'getBank']);

Route::get('/insert-kostum', [CostumeController::class, 'insert']);

Route::post('/insert-kostum', [CostumeController::class, 'storeKostum']);

Route::get('/costume-check', [CostumeController::class, 'check']);

Route::get('/order-income', [OrderController::class, 'getIncome']);

Route::get('/get-costume-rent', [CalendarController::class, 'getCostumeRent']);

Route::get('/tes', function(){
    return view('test');
});