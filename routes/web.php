<?php

use Illuminate\Support\Facades\Route;

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
//     return view('admin.dashboard');
// });

Route::prefix('admin')->group(function(){
    Route::get('/', function(){
        return view('admin.dashboard');
    });

    Route::get('/costumes', function(){
        return view('admin.costumes');
    });

    Route::get('/orders', function(){
        return view('admin.orders');
    });

    Route::get('orders/{id}', function(){
        return view('admin.order');
    });

    Route::get('customers', function(){
        return view('admin.customers');
    });

    Route::get('customers/{id}', function(){
        return view('admin.customer');
    });

    Route::get('/login', function(){
        return view('admin.login');
    });
});