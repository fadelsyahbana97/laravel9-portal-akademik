@extends('tampilan')
@section('titel','student')

@section('content')
{{-- <h1 class="text-light text-center mb-5">Data Student</h1> --}}
<br>

    <div class="container ">
       
        <div class="my-3 d-flex justify-content-between">
            <h2 class="text-light ">List Student</h2>
            <form action="" method="get">
                <div class="input-group ">
                    <input type="text" name="keyword" class="form-control" placeholder="Keyword">
                    <button class="input-group-text btn btn-primary" id="basic-addon2">Search</button>
                  </div>  
            </form>
           
        </div>
        <div class="my-3 d-flex justify-content-between">
            <a href="student-tambah" class="btn btn-primary">Add Data</a>
            <a href="student-deleted" class="btn btn-info">Show data deleted</a>
        </div>
        @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('massage') }}
          </div>
        @endif

        <br>
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
                   @if (Auth::user()->role_id != 1 && Auth::user()->role_id !=2)
                       -
                       @else
                       <a  href="student-show/{{ $data->id }}">detail</a>
                       <a  href="student-edite/{{ $data->id }}">edit</a>
                   @endif 
                
                   @if (Auth::user()->role_id == 1)
                   <a  href="student-delet/{{ $data->id }}">delete</a>
                   @endif
                      
                
                    
                </td>
            </tr>
                @endforeach
        </table>
        <div class="my-4" >
            {{ $studen->withQueryString()->links() }}
        </div>
       
    </div>
@endsection