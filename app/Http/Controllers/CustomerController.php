<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    public function index(){
        return view('admin.customers', [
            'title' => 'Customers',
            'customers' => User::where('role', '!=', 'admin')->get()
        ]);
    }

    public function customer($id){
        $user = User::find($id);
        $img_ktp  = Storage::disk('local')->get('member/'.$user->username.'/'.$user->foto_ktp);
        $img_selfie  = Storage::disk('local')->get('member/'.$user->username.'/'.$user->foto_selfie);
        return view('admin.customer', [
            'title' => 'Customer Detail',
            'customer' => $user,
            'img_ktp' => $img_ktp,
            'img_selfie' => $img_selfie
        ]);
    }
}