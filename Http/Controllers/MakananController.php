<?php

namespace App\Http\Controllers;

use App\Models\Makan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function index(){
        $makanan = Makan::all();
        return view('home',['makana'=>$makanan]);
    }
}
