<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public function index($order_id){
        return view('member.invoice', [
            'order' => Order::find($order_id),
        ]);
    }

    
}