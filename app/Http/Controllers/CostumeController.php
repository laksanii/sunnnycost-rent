<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Costume;
use App\Models\Category;
use Carbon\CarbonImmutable;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Imports\CostumeImport;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class CostumeController extends Controller
{
    public function index(){
        return view('admin.costumes', [
            'title' => 'Costumes',
            'costumes' => Costume::all(),
            'categories' => Category::all(),
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
    
    public function updateCostume(Request $request){
        $validate = $request->validate([
            'gambar' => 'image|file|max:2048'
        ],
        [
            'gambar.image' => 'Harus berupa file gambar',
            'gambar.file' => 'Harus berupa file',
            'gambar.max' => 'Ukuran file maksimal 2MB',
        ]);

        if(!is_null($request->file('gambar'))){
            $nama_file = Str::slug($request->nama, '_');
            $ext = $request->file('gambar')->getClientOriginalExtension();
            $path = 'img/costumes/';
            $request->file('gambar')->storeAs($path, $nama_file.'.'.$ext, 'asset');
        }
        
        $costume = Costume::find($request->id);
        
        $costume->costume_name = $request->nama;
        $costume->description = $request->description;
        $costume->price = $request->harga;
        if(!is_null($request->file('gambar'))){
            $costume->gambar = $nama_file.'.'.$ext;
        }
        
        $costume->save();

        return redirect()->back()->with('editSuccess', 'Kostum berhasil diedit');
    }

    public function deleteCostume($id) {
        $costume = Costume::find($id);
        Storage::disk('asset')->delete('img/costumes/'.$costume->gambar);
        $costume->delete();

        return redirect("/admin/costumes")->with('deleteSuccess', 'Kostum berhasil dihapus');
    }

    public function insertCostume(Request $request){
        $validate = $request->validate([
            'nama' => 'required',
            'description' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|file|max:2048'
        ],
        [
            'nama.required' => 'Nama kostum tidak boleh kosong',
            'description.required' => 'Deskripsi tidak boleh kosong',
            'harga.required' => 'Harga tidak boleh kosong',
            'gambar.required' => 'Gambar tidak boleh kosong',
            'gambar.image' => 'Harus berupa file gambar',
            'gambar.file' => 'Harus berupa file',
            'gambar.max' => 'Ukuran file maksimal 2MB',
        ]);

        $nama_file = Str::slug($request->nama, '_');
        $ext = $request->file('gambar')->getClientOriginalExtension();
        $path = 'img/costumes/';
        $request->file('gambar')->storeAs($path, $nama_file.'.'.$ext, 'asset');

        $costumes = new Costume;
        $costumes->costume_name = $request->nama;
        $costumes->description = $request->description;
        $costumes->price = $request->harga;
        $costumes->gambar = $nama_file .'.'.$ext;
        $costumes->category_id = $request->category;

        $costumes->save();

        return redirect()->back()->with('insertSuccess', 'Kostum baru berhasil ditambahkan');

    }
}