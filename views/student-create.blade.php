@extends('tampilan')
@section('titel','student-tambah')

@section('content')



<div class="mt-5 col-4 m-auto text-light">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="student-adds" method="POST" enctype="multipart/form-data">
        @csrf
      
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="nama" id="name" required >
        </div>

        <div class="mb-3">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="">select one</option>
                <option value="L">L</option>
                <option value="P">P</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="name">NIS</label>
            <input type="text" class="form-control" id="nis" required name="nis">
        </div>

        <div class="mb-3">
            <label for="class">Class</label>
            <select name="class_id" id="class" class="form-control" required>
                <option value="">select one</option>
                @foreach ($stud as $view)
                    <option value="{{ $view->id }}">{{ $view->name }}</option>
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