@extends('tampilan')
@section('titel','Kelas')

@section('content')

    <div class="container ">
        <div class="d-flex justify-content-between"">
            <h2 class="text-light">Data Kelas</h2>
            <form action="" method="get">
                <div class="input-group ">
                    <input type="text" name="keyword" class="form-control" placeholder="Keyword">
                    <button class="input-group-text btn btn-primary" id="basic-addon2">Search</button>
                  </div>  
            </form>

        </div>
       
        @if (Session::has('succes'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('massage') }}
          </div>
        @endif
        <div class="my-3 d-flex justify-content-between">
            <a href="kelas-create" class="btn btn-primary">Add Data</a>
            <a href="kelas-deleted-show" class="btn btn-info">Show Data Deleted</a>
        </div>
        <br>
        <table class="table  table-warning table-striped text-center ">
            <tr class="table-secondary">
                <th>No</th>
                <th>Kelas</th>
                <th>Action</th>
                
                
                
            </tr>
            @foreach ($kelazz as $data )
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->name }}</td>
                <td>
                    <a href="kelas-show/{{ $data->id }}">detail</a>
                    <a href="kelas-edit/{{ $data->id }}">edit</a>
                    <a href="kelas-deleted/{{ $data->id }}">delete</a>
                </td>
                
            </tr>
            @endforeach
        </table>
        <div class="my-3 ">
            {{ $kelazz->withQueryString()->links() }}
        </div>
    </div>
@endsection