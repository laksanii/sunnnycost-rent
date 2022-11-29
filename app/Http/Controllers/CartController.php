<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index($username){
        $user = User::where('username', $username)->first();
        
        return view('member.cart', [
            'title' => 'Cart',
            'cart' => $user->carts,
            'payments' => Payment::all(),
        ]);
    }

    public function storeCart(Request $request){
        
        if(Cart::where('user_id', $request->user_id)->where('costume_id', $request->costume_id)->count() != 0){
            $user_cart = Cart::where('user_id', $request->user_id)->count();
            return response()->json(array('message' => 'Gagal ditambahkan kostum sudah ada di keranjang', 'count' => $user_cart));
        }

        $cart = New Cart;

        $cart->user_id = $request->user_id;
        $cart->costume_id = $request->costume_id;

        $cart->save();
        
        $user_cart = Cart::where('user_id', $request->user_id)->count();
        
        return response()->json(array('message' => 'Berhasil ditambahkan ke keranjang', 'count' => $user_cart));
    }

    public function deleteItem(Request $request){
        Cart::where('user_id', $request->user_id)->where('costume_id', $request->costume_id)->delete();

        return redirect()->back()->with("deleteStatus", "Kostum berhasil dihapus dari keranjang");
    }
}