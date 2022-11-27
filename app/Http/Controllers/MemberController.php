<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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

    public function index(){
        return view('member.home', [
            'title' => 'SunnyCos Rent',
        ]);
    }
    public function storeMember(Request $request){
        $validated = $request->validate([
                'nama' => 'required|min:3',
                'username' => 'required|min:6|unique:users,username',
                'email' => 'required|email:dns|unique:users,email',
                'password' => 'required|min:8|regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/',
                'no_hp' => 'required|numeric|digits_between:10,15',
                'provinsi' => 'required',
                'kota' => 'required',
                'alamat' => 'required',
                'kode_pos' => 'required',
                'foto_selfie' => 'required|image|file|max:10240',
                'foto_ktp' => 'required|image|file|max:2048',
            ],
            [
                'nama.required' => 'Nama tidak boleh kosong',
                'nama.min' => 'Nama Minimal 3 karakter',
                'username.required' => 'Username tidak boleh kosong',
                'username.min' => 'Username minimal 6 karakter',
                'username.unique' => 'Username sudah ada',
                'email.required' => 'Email tidak boleh kosong',
                'email.email' => 'Email tidak valid',
                'email.unique' => 'Email sudah terdaftar',
                'password.required' => 'Password tidak boleh kosong',
                'password.min' => 'Password minimal 8 karakter',
                'password.regex' => 'Password harus huruf dan angka',
                'no_hp.required' => 'No hp tidak boleh kosong',
                'no_hp.digits_between' => 'No hp minimal 10 digit maksimal 15 digit',
                'provinsi' => 'Provinsi tidak boleh kosong',
                'kota' => 'Kota tidak boleh kosong',
                'kode_pos' => 'Kode Pos tidak boleh kosong',
                'foto_selfie.required' => 'Foto selfie tidak boleh kosong',
                'foto_selfie.image' => 'Harus berupa file gambar',
                'foto_selfie.file' => 'Harus berupa file',
                'foto_selfie.max' => 'Ukuran file maksimal 10MB',
                'foto_ktp.required' => 'Foto KTP tidak boleh kosong',
                'foto_ktp.image' => 'Harus berupa file gambar',
                'foto_ktp.file' => 'Harus berupa file',
                'foto_ktp.max' => 'Ukuran file maksimal 2MB',
        
        ]);
        
        // Store foto selfie
        $nama_file_selfie = $request->username . '_selfie';
        $ext = $request->file('foto_selfie')->getClientOriginalExtension();
        $path = 'member/'.$request->username;
        $request->file('foto_selfie')->storeAs($path, $nama_file_selfie.'.'.$ext, 'local');

        // Store foto KTP
        $nama_file_ktp = $request->username . '_ktp';
        $ext = $request->file('foto_ktp')->getClientOriginalExtension();
        $path = 'member/'.$request->username;
        $request->file('foto_ktp')->storeAs($path, $nama_file_ktp.'.'.$ext, 'local');

        $member = new User;

        $member->name = $request->nama;
        $member->username = $request->username;
        $member->email = $request->email;
        $member->password = Hash::make($request->password);
        $member->provinsi = $request->provinsi;
        $member->kota = $request->kota;
        $member->alamat = $request->alamat;
        $member->kode_pos = $request->kode_pos;
        $member->no_telepon = $request->no_hp;
        $member->foto_selfie = $nama_file_selfie.$ext;
        $member->foto_ktp = $nama_file_ktp.$ext;

        $member->save();
        
        return redirect()->back()->with('registSuccess', 'Registrasi Berhasil');
    }

    public function login(){
        return view('member.login', [
            'title' => 'login',
        ]);
    }
}