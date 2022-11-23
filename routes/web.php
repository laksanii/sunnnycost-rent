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

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/admin/costumes', function (){
    return view('admin.costumes');
});

Route::get('admin/orders', function (){
    return view('admin.orders');
});

Route::get('admin/orders/{id}', function (){
    return view('admin.order');
});