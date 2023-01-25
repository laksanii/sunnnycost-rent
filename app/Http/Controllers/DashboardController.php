<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Costume;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $ready = Costume::where('status', '=', 'ready')->count();
        $pengiriman_kembali = Costume::where('status', '=', 'pengiriman kembali')->count();
        $on_rent = Costume::where('status', '=', 'on book')->orWhere('status','on rent')->count();
        $terlambat = Costume::where('status', '=', 'terlambat')->count();
        $order_belum_lunas = Order::where('payment_status', 'belum lunas')->count();
        $gagal = Order::where('payment_status', 'gagal')->count();

        $year = Carbon::now()->format('Y');

        return view('admin.dashboard', [
            'table' => 'Dashboard',
            'ready' => $ready,
            'pengiriman_kembali' => $pengiriman_kembali,
            'on_rent' => $on_rent,
            'terlambat' => $terlambat,
            'belum_lunas' => $order_belum_lunas,
            'gagal' => $gagal,
            'year' => $year,
        ]);
    }
}