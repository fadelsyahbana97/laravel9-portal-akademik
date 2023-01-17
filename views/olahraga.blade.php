@extends('tampilan')
@section('titel','olahraga')

@section('content')
    <div class="container">
        <h1 class="text-light ">Data Olahraga</h1>
        <div class="my-3">
            <a href="olahraga-create" class="btn btn-primary">Add Data</a>
        </div>
        <br>
        <table class="table table-warning table-striped text-center">
            <tr class="table-secondary">
                <th>No</th>
                <th>Nama</th> 
                <th>Action</th> 
            </tr>
            @foreach ($olahrage as $data )
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->nama }}</td> 
                <td><a href="olahraga-show/{{ $data->id }}">detail</a></td> 
            </tr>
            @endforeach
        </table>
    </div>
@endsection