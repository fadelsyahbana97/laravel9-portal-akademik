@extends('tampilan')
@section('titel','student-delete')

@section('content')

<div class="container mt-3 text-light">
    <h2 class="my-4">Apakah anda yakin manghapus Kelas {{ $delee->name }}</h2>

    <form style="display:inline-block" action="/kelass-hapus/{{ $delee->id }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger" >Delete</button>
    </form>

    <a href="/kelas" class="btn btn-primary">Cancel</a>
</div>
    
@endsection