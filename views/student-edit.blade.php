@extends('tampilan')
@section('titel','student-tambah')

@section('content')

<div class="mt-5 col-4 m-auto text-light">
    <form action="/student-editt/{{ $studd->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="nama" id="name" required value="{{ $studd->nama }}" >
        </div>

        <div class="mb-3">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="{{ $studd->gender }}">{{ $studd->gender }}</option>
                @if ($studd->gender == 'P')
                    <option value="L">L</option>
                @else
                    <option value="P">P</option>
                @endif
            </select>
        </div>

        <div class="mb-3">
            <label for="name">NIS</label>
            <input type="text" class="form-control" id="nis" required name="nis" value="{{ $studd->nis }}">
        </div>

        <div class="mb-3">
            <label for="class">Class</label>
            <select name="class_id" id="class" class="form-control" required>
            
                    <option value="{{ $studd->kelas->id }}">{{ $studd->kelas->name }}</option>
                   @foreach ($clus as $item)
                   <option value="{{ $item->id }}">{{ $item->name }}</option>
                   @endforeach
                </select>
            </select>
        </div>

        <div class="mb-3">
            <button class="btn btn-success" type="submit">Update</button>
        </div>

    </form>
</div>

@endsection