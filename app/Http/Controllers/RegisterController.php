<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{
    public function index(){
        
        $province_client = Http::withHeaders([
            'key' => '05fb707215b778a76401b6996bc53823'
        ])->get('https://api.rajaongkir.com/starter/province')->json();

        $provinsi = $province_client['rajaongkir']['results'];

        // dd(collect($city)->where('province_id', 21));

        return view('member.register', [
            'title' => 'register',
            'provinces' => $provinsi,
        ]);
    }

    public function getCity(Request $request){
        $city_client = Http::withHeaders([
            'key' => '05fb707215b778a76401b6996bc53823'
        ])->get('https://api.rajaongkir.com/starter/city', [
            'province' => $request->id,
        ])->json();

        $city = collect($city_client['rajaongkir']['results']);

        return response()->json(array("city" => $city));
    }
}