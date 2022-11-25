<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index(){
        return view('admin.customers', [
            'title' => 'Customers',
            'customers' => User::where('role', '!=', 'admin')->get()
        ]);
    }

    public function customer($id){
        return view('admin.customer', [
            'title' => 'Customer Detail',
            'customer' => User::find($id)
        ]);
    }
}