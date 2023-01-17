@extends('tampilan')
@section('titel','home')

@section('content')
    {{-- <div class="container">
        <h1 class="text-light"></h1>
        <br>
        <table class="table">
            <tr>
                <th>No</th>
                <th>nama</th>
                <th>jenis</th>
            </tr>
            @foreach ($makana as $data )
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->nama }}</td>
                <td> {{ $data->jenis }}</td>
            </tr>
            @endforeach --}}
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
<div class="container ">
    <h1 class="text-light display-1 text-center ">...Selamat Datang....</h1>
    <h3 class="text-light display-1 text-center ">{{ Auth::user()->name}}, Kamu adalah {{ Auth::user()->role->name}}</h3>

</div>
            

        </table>
    </div>
@endsection