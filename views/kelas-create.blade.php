@extends('tampilan')
@section('titel','student-tambah')

@section('content')

<div class="mt-5 col-4 m-auto text-light">
    <form action="kelas-adds" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" required >
        </div>

        <div class="mb-3">
            <label for="class">Guru</label>
            <select name="guru_id" id="guru" class="form-control" required>
                <option value="">select one</option>
                @foreach ($klse as $view)
                    <option value="{{ $view->id }}">{{ $view->nama }}</option>
                @endforeach
               
            </select>
        </div>

        <div class="mb-3">
            <label for="photo">Photo</label>
            <div class="input-group">
                <input type="file" class="form-control" id="photo" name="photo">
                
              </div>
        </div>
        <div class="mb-3">
            <button class="btn btn-success" type="submit">Save</button>
        </div>

    </form>
</div>

@endsection