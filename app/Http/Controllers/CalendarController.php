<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalendarController extends Controller
{
    public function index(){
        return view('admin.calendar', [
            'title' => 'Calendar'
        ]);
    }

    public function getCostumeRent(){
        $data = [];
        $orders = Order::where('payment_status', '!=', 'gagal')->get();
        foreach($orders as $order){
            foreach($order->costumes as $costume){
                $temp = [];
                $temp["title"] = $costume->costume_name . " (" . $order->user->name .")";
                $temp["start"] = $order->tgl_rental->format('Y-m-d');
                $temp["end"] = $order->tgl_kembali;
                $temp["url"] = "/admin/orders/$order->id";
                if($order->payment_status == 'belum lunas'){
                    $temp["color"] = '#FFA500';
                }
                $data[] = $temp;
            }
        }
        
        return response()->json(array("costume" => $data));
    }
}