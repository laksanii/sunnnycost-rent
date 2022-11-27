<?php

namespace App\Http\Controllers;

use App\Models\Costume;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CostumeController extends Controller
{
    public function index(){
        return view('admin.costumes', [
            'title' => 'Costumes',
            'costumes' => Costume::all(),
        ]);
    }

    public function costume($id){
        return view('admin.costume', [
            'title' => 'Costume Detail',
            'costume' => Costume::find($id)
        ]);
    }

    public function memberIndex(){
        return view('member.costumes', [
            'title' => 'Costumes',
            'costumes' => Costume::all(),
        ]);
    }

    public function memberCostume($id){
        return view('member.costume', [
            'title' => 'Costume Detail',
            'costume' => Costume::find($id),
        ]);
    }
}