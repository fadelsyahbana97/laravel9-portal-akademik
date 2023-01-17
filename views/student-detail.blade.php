@extends('tampilan')
@section('titel','student-detail')

@section('content')

<div class="container">
    <h1 class="text-light">Data {{ $stun->nama }}</h1>
    <div class="my-2 d-flex justify-content-center">
       @if ($stun->image != '')
       <img src="{{ asset('storage/image/'.$stun->image) }}" alt="" width="200px">
       @else
       <img src="{{ asset('gambar/user.png') }}" alt="" width="100px">
       @endif
    </div>
    <br>
    <table class="table table-border table-warning table-striped text-center ">
        <tr class="table-secondary">
            <th>NIS</th>
            <th>Gender</th>
            <th>Class</th>
            <th>Wali kelas</th>
        </tr>
        <tr>
            <td>{{ $stun->nis }}</td>
            <td>
                @if ($stun->gender == 'P' )
                    Perempuan
                @else
                    Laki-Laki
                @endif
            </td>
            <td>{{ $stun->kelas->name }}</td>
            <td>{{ $stun->kelas->guyu->nama }}</td>
        </tr>
    </table>
        <h2 class="text-light mt-5">Extrakulikuler</h2> 
        <ol>
            @foreach ($stun->olahraga as $vie)
              <li class="text-light ">{{ $vie->nama }}</li>  
            @endforeach
        </ol>        
        
    </div>
    
@endsection