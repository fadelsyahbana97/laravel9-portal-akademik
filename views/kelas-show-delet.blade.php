@extends('tampilan')
@section('titel','Kelas')

@section('content')

    <div class="container">
        <h1 class="text-light">Data Kelas Yang Terhapus</h1>
        <div class="my-3">
            <a href="kelas" class="btn btn-primary">Back</a>  
        </div>
        <br>
        <table class="table  table-warning table-striped text-center ">
            <tr class="table-secondary">
                <th>No</th>
                <th>Kelas</th>
                <th>Action</th>
                
            </tr>
            @foreach ($klzze as $data )
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->name }}</td>
                <td>
                    <a href="/kelas-restore/{{ $data->id }}">Restore</a>
                </td>
                
            </tr>
            @endforeach
               

        </table>
    </div>
@endsection