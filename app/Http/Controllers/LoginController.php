<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login', [
            'title' => 'Login'
        ]);
    }
    
    public function authentication(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            session()->regenerate();
            if(Auth::user()->role == 'admin'){
                return redirect()->intended("/admin");
            }else{
            session(["cart" => []]);
            return redirect()->intended("/");
            }
        }

        return back()->with('loginError', 'Username atau password salah');
    }

    public function logout(Request $request){
        if(Auth::user()->role == 'admin'){
            Auth::logout();
            session()->invalidate();
            session()->regenerateToken();
    
            return redirect('/admin/login');
        }else{
            Auth::logout();
            session()->invalidate();
            session()->regenerateToken();
    
            return redirect('/login');
        }

    }
}