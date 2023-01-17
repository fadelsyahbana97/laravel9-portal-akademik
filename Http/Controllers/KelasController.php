<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KelasController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $kelass = kelas::where('name', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('guyu', function ($query) use ($keyword) {
                $query->where('nama', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(5);
        return view('kelas', ['kelazz' => $kelass]);
    }

    public function show($id)
    {
        $kela = kelas::with(['stud', 'guyu'])->findOrFail($id);
        return view('kelas-detail', ['kels' => $kela]);
    }

    public function create()
    {
        $kls = Guru::get();
        return view('kelas-create', ['klse' => $kls]);
    }

    public function simpan(Request $request)
    {
        $new = '';

        if ($request->file('photo') != '') {
            $extensi = $request->file('photo')->getClientOriginalExtension();
            $new = $request->name . '-' . now()->timestamp . '.' . $extensi;
            $request->file('photo')->storeAs('imagekls', $new);
        }

        $request['image'] = $new;
        $klz = kelas::create($request->all());

        if ($klz) {
            Session::flash('succes', 'berhasil');
            Session::flash('massage', 'Berhasil Di tambahkan !');
        }

        return redirect('kelas');
    }

    public function edite(Request $request, $id)
    {
        $edit = kelas::with('guyu')->findOrFail($id);
        $editi = Guru::where('id', '!=', $edit->guru_id)->get();
        return view('kelas-edited', ['ediit' => $edit, 'adot' => $editi]);
    }

    public function updated(Request $request, $id)
    {
        $stude = kelas::findOrFail($id);
        $stude->update($request->all());

        return redirect('/kelas');
    }

    public function delet($id)
    {
        $dele = kelas::findOrFail($id);
        return view('/kelas-deleted', ['delee' => $dele]);
    }

    public function hapus($id)
    {
        $hapuse = kelas::findOrFail($id);
        $hapuse->delete();
        if ($hapuse) {
            Session::flash('succes', 'berhasil');
            Session::flash('massage', 'Berhasil Di Hapus!!!');
        }
        return redirect('/kelas');
    }
    public function showDelet()
    {
        $klaz = kelas::onlyTrashed()->get();
        return view('kelas-show-delet', ['klzze' => $klaz]);
    }

    public function restore($id)
    {
        $klaz = kelas::withTrashed()->where('id', $id)->restore();
        if ($klaz) {
            Session::flash('succes', 'berhasil');
            Session::flash('massage', 'Berhasil Di Kembalikan');
        }

        return redirect('/kelas');
    }

}
