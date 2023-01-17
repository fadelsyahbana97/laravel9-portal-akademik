<?php

namespace App\Http\Controllers;

use App\Models\Olahraga;

class OlahragaController extends Controller
{
    public function olahraga()
    {
        $olahraga = Olahraga::get();
        return view('olahraga', ['olahrage' => $olahraga]);
    }

    public function show($id)
    {
        $olah = Olahraga::with(['student'])->findOrFail($id);
        return view('olahraga-detail', ['olahe' => $olah]);
    }

}
