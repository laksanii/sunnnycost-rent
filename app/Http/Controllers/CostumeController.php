<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Costume;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Imports\CostumeImport;
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
    
}