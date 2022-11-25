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
}