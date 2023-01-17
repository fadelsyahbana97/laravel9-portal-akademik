@extends('tampilan')
@section('titel','Guru')

@section('content')

    <div class="container">
        <h1 class="text-light">Data Guru</h1>
        <div class="my-3">
            <a href="" class="btn btn-primary">Add Data</a>
        </div>
        <br>
        <table class="table table-warning table-striped text-center">
            <tr class="table-secondary">
                <th>No</th>
                <th>nama</th> 
                <th>Action</th> 
               
            </tr>
            @foreach ($guruu as $data )
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->nama }}</td>
                <td><a href="guru-show/{{ $data->id }}">detail</a></td>
               
            </tr>
            @endforeach
        </table>
    </div>
@endsection