<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Costume;
use App\Models\Category;
use Carbon\CarbonImmutable;
use Illuminate\Http\Request;
use App\Imports\CostumeImport;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class CostumeController extends Controller
{
    public function index(){
        if(Auth::check()){
            $carts = Cart::where('user_id', Auth::user()->id);
        }else{
            $carts = collect([]);
        }
        return view('admin.costumes', [
            'title' => 'Costumes',
            'costumes' => Costume::all(),
            'carts' => $carts,
            'carts_count' => $carts->count(),
        ]);
    }

    public function costume($id){
        return view('admin.costume', [
            'title' => 'Costume Detail',
            'costume' => Costume::find($id)
        ]);
    }

    public function memberIndex(Request $request){
        $costumes = Costume::latest();
        if($request->search){
            $costumes->where('costume_name', 'like', '%'.$request->search.'%');
        }
        return view('member.costumes', [
            'title' => 'Costumes',
            'costumes' => !$request->category ? $costumes->paginate(16) : $costumes->where('category_id', $request->category)->paginate(16) ,
            'categories' => Category::all(),
            'cate' => $request->category ? $request->category : 'all',
        ]);
    }

    public function memberCostume($id){
        return view('member.costume', [
            'title' => 'Costume Detail',
            'costume' => Costume::find($id),
        ]);
    }

    public function insert(){
        return view('insert');
    }
    
    public function storeKostum(Request $request){
        $file = $request->file('excel');

        $nama_file = rand().$file->getClientOriginalName();

        $file->move('file_siswa',$nama_file);

        Excel::import(new CostumeImport, public_path('/file_siswa/'.$nama_file));
        
        return "Berhasil Import";
    }

    public function check(Request $request){
        $cart = Cart::where('user_id', Auth::user()->id)->get();
        $costumes_id = [];
        $msg = [];
        foreach ($cart as $item) {
            array_push($costumes_id, $item->costume_id);
        }

        $tgl = new CarbonImmutable($request->tgl);
        
        // dd($costumes_id);
        $orders = Order::whereBetween('tgl_kembali', [$tgl->subDays(3),$tgl->addDays(3)])->orWhereBetween('tgl_rental', [$tgl, $tgl->addDays(5)])->where('payment_status','!=','gagal')->get();
        foreach($orders as $order){
            foreach($order->costumes as $costume){
                if(in_array($costume->id, $costumes_id)){
                    $msg[$costume->id] = "$costume->costume_name tidak bisa dirental pada tanggal tersebut";
                }
            }
        }
        return response()->json(array('msg' => $msg));
    }
    
}