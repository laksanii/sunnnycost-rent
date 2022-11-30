<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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

    public function memberOrders(){
        return view('member.orders', [
            'title' => 'Order',
            'orders' => Order::where('user_id', Auth::user()->id)->orderBy('id','desc')->paginate(7),
        ]);
    }

    public function memberOrder($order_id) {
        return view('member.order', [
            'title' => 'Order Detail',
            'order' => Order::find($order_id),
        ]);
    }
}