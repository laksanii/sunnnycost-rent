<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function index(){
        return view('admin.orders', [
            'title' => 'Orders',
            'orders' => Order::all()
        ]);
    }

    public function order($id){
        $order = Order::find($id);
        $img_ktp  = Storage::disk('local')->get('member/'.$order->user->username.'/'.$order->user->foto_ktp);
        $img_selfie  = Storage::disk('local')->get('member/'.$order->user->username.'/'.$order->user->foto_selfie);
        return view('admin.order', [
            'title' => 'Order Detail',
            'order' => $order,
            'img_ktp' => $img_ktp,
            'img_selfie' => $img_selfie
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

    public function getIncome(Request $request){
        $orderIncome = Order::select(DB::raw('sum(total) as total'), DB::raw("DATE_FORMAT(tgl_order, '%m') as months"))->whereYear('tgl_order', $request->year)->groupBy('months')->orderBy('months', "asc")->get(); 
        return response()->json(array('success' => $orderIncome));
    }
}