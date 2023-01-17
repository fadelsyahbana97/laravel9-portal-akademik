<?php

namespace App\Http\Controllers;

use App\Models\Guru;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::get();
        return view('guru', ['guruu' => $guru]);
    }

    public function show($id)
    {
        $gus = Guru::with(['kelass.stud'])->findOrfail($id);
        return view('guru-detail', ['gusss' => $gus]);
    }
}
