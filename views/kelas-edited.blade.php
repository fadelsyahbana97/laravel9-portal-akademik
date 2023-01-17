
@extends('tampilan')
@section('titel','student-tambah')

@section('content')

<div class="mt-5 col-4 m-auto text-light">
    <form action="/kelas-updated/{{ $ediit->id }}" method="POST">
        @csrf
        @method('PUT')
    
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" required value="{{ $ediit->name }}">
        </div>

        <div class="mb-3">
            <label for="class">Guru</label>
            <select name="guru_id" id="guru" class="form-control" required>
                <option value="{{ $ediit->guyu->nama }}">{{ $ediit->guyu->nama }}</option>
                @foreach ($adot as $view)
                    <option value="{{ $view->id }}">{{ $view->nama }}</option>
                @endforeach
               
            </select>
        </div>

        <div class="mb-3">
            <button class="btn btn-success" type="submit">Update</button>
        </div>

    </form>
</div>

@endsection