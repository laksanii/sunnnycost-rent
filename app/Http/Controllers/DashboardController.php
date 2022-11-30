<?php

namespace App\Http\Controllers;

use App\Models\Costume;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $ready = Costume::where('status', '=', 'ready')->count();
        $pengiriman_kembali = Costume::where('status', '=', 'pengiriman kembali')->count();
        $on_rent = Costume::where('status', '=', 'on book')->orWhere('status','on rent')->count();
        $terlambat = Costume::where('status', '=', 'terlambat')->count();

        return view('admin.dashboard', [
            'table' => 'Dashboard',
            'ready' => $ready,
            'pengiriman_kembali' => $pengiriman_kembali,
            'on_rent' => $on_rent,
            'terlambat' => $terlambat
        ]);
    }
}