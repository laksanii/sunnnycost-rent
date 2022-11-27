<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class MemberController extends Controller
{
    public function register(){
        $province_client = Http::withHeaders([
            'key' => '05fb707215b778a76401b6996bc53823'
        ])->get('https://api.rajaongkir.com/starter/province')->json();

        $city_client = Http::withHeaders([
            'key' => '05fb707215b778a76401b6996bc53823'
        ])->get('https://api.rajaongkir.com/starter/city')->json();

        $provinsi = $province_client['rajaongkir']['results'];
        $city = $city_client['rajaongkir']['results'];

        // dd(collect($city)->where('province_id', 21));

        return view('member.register', [
            'title' => 'register',
            'provinces' => $provinsi,
            'cities' => $city,
        ]);
    }

    public function storeMember(Request $request){
        $credentials = $request->validate([
            'nama' => 'required|min:6',
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|regex:^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$',
            'no_hp' => 'required|numeric|min:10|max:15',
            'provinsi' => 'required',
            'kota' => 'required',
            'alamat' => 'required',
            'kode_pos' => 'required',
            'foto_selfie' => 'required|image|file|max:10240',
            'foto_ktp' => 'required|image|file|max:2048',
        ]);

        // dd($request);
    }

    public function login(){
        return view('member.login', [
            'title' => 'login',
        ]);
    }
}