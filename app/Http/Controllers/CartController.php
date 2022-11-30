<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Costume;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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

    public function checkOut(Request $request){
        $user_cart = Auth::user()->carts;
        
        $tgl_rental = Carbon::createFromDate($request->tgl_rental);
        $tgl_kembali = $tgl_rental->addDays(3);
        $tgl_order = Carbon::now('Asia/Jakarta')->toDateString();

        $order = new Order;
        $order->tgl_order = $tgl_order;
        $order->tgl_rental = $tgl_rental;
        $order->tgl_kembali = $tgl_kembali;
        $order->payment_id = $request->payment;
        $order->amount = $request->amount;
        $order->user_id = Auth::user()->id;
        $order->ongkir = $request->ongkir;
        $order->total = $request->total;

        $order->save();
        
        foreach($user_cart as $item){
            $order->costumes()->attach($item->costume_id, ["price" => $item->costume->price]);
            $costume = Costume::find($item->costume_id);
            $costume->status = "on book";
            $costume->save();

        }

        Cart::where('user_id', Auth::user()->id)->delete();

        
        
        return redirect('/invoice/'.$order->id);
    }

    public function getBank(Request $request){
        $data = Payment::find($request->id);

        return response()->json(array('bank' => $data,));
    }
}