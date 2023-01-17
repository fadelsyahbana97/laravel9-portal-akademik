
@extends('tampilan')
@section('titel','student')

@section('content')


    <div class="container text-light">

        <h1 class=" ">Data Terhapus</h1>
    </table>
    <div class="my-3">
        <a href="student" class="btn btn-primary">Back</a>
    </div>
        <table class="table table-warning table-striped text-center ">
            <tr class="table-secondary">
                <th>No</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>NIS</th>
                <th>Action</th>
                
                
            </tr>
            @foreach ($studen as $data )
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->gender }}</td>
                <td>{{ $data->nis }}</td>
                <td>
                    <a  href="student-restore/{{ $data->id }}">Restore</a>
                    
                </td>
                
            @endforeach

        
    </div>
@endsection