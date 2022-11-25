<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index(){
        return view('admin.orders', [
            'title' => 'Orders',
            'orders' => Order::all()
        ]);
    }

    public function order($id){
        return view('admin.order', [
            'title' => 'Order Detail',
            'order' => Order::find($id)
        ]);
    }
}