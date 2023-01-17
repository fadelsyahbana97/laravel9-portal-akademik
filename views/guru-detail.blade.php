@extends('tampilan')
@section('titel','student-detail')

@section('content')

<div class="container ">
    
    <h2 class="text-light mb-4">Data Guru {{ $gusss->nama }}</h2>
    <h2 class="text-light mb-4">Kelas {{ $gusss->kelass->name }}</h2>
    <div>
        <h3 class="text-light mt-5 ">List siswa : </h3>
        <ol>
            @foreach ($gusss->kelass->stud as $vie)
              <li class="text-light ">{{ $vie->nama }}</li>  
              
            @endforeach
        </ol>   
    </div>
              
        
    </div>
    
@endsection