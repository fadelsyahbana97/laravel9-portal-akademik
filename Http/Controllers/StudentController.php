<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudent;
use App\Models\kelas;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $student = Student::where('nama', 'LIKE', '%' . $keyword . '%')
            ->orWhere('nis', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('kelas', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(10);

        return view('student', ['studen' => $student]);
    }

    public function show($id)
    {
        $studen = Student::with(['kelas.guyu', 'olahraga'])->findOrFail($id);
        return view('student-detail', ['stun' => $studen]);
    }

    public function create()
    {
        $stun = kelas::select('id', 'name')->get();
        return view('student-create', ['stud' => $stun]);
    }

    public function simpan(CreateStudent $request)
    {
        $new = '';
        if ($request->file('photo')) {
            $extension = $request->file('photo')->getClientOriginalName();
            $new = $request->nama . '-' . now()->timestamp . '.' . $extension;
            $request->file('photo')->storeAs('image', $new);
        }

        $request['image'] = $new;
        //Mass Assignment
        $studeent = Student::create($request->all());

        if ($studeent) {
            Session::flash('status', 'succes');
            Session::flash('massage', 'Data Berhasil di tambahkan!!!');
        }

        return redirect('/student');
    }

    public function edit(Request $request, $id)
    {
        $stud = Student::with('kelas')->findOrFail($id);
        $cles = kelas::where('id', '!=', $stud->class_id)->get();
        return view('student-edit', ['studd' => $stud, 'clus' => $cles]);
    }

    public function update(Request $request, $id)
    {
        $stude = Student::findOrFail($id);
        $stude->update($request->all());

        return redirect('/student');
    }

    public function delett($id)
    {
        $del = Student::findOrFail($id);
        return view('student-deleted', ['dell' => $del]);
    }

    public function hapus($id)
    {
        $hapusStud = Student::findOrFail($id);
        $hapusStud->delete();
        if ($hapusStud) {
            Session::flash('status', 'succes');
            Session::flash('massage', 'Data Berhasil di hapus!!!');
        }

        return redirect('/student');

        // $hapus = DB::table('students')->where('id', $id)->delete();
        // return redirect('/student');
    }

    public function showDelete()
    {
        $student = Student::onlyTrashed()->get();
        return view('student-showw-delet', ['studen' => $student]);
    }

    public function restore($id)
    {
        $student = Student::withTrashed()->where('id', $id)->restore();
        if ($student) {
            Session::flash('status', 'succes');
            Session::flash('massage', 'Data Berhasil di kembalikan!!!');
        }
        return redirect('/student');
    }

}
