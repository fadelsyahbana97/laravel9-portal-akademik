@extends('tampilan')
@section('titel','student-detail')

@section('content')
<div class="my-4 d-flex justify-content-center" >
    @if ($kels->image != '')
    <img src="{{ asset('storage/imagekls/'.$kels->image) }}" width="200px" >
    @else
    <img src="{{ asset('gambar/thinking.png') }}" width="100px" >
    @endif
   
</div>
<div class="container ">
    <h1 class="text-light mb-4">Kelas {{ $kels->name }}</h1>
    <h3 class="text-light ">Wali Kelas : {{ $kels->guyu->nama }}</h3>
    
 
    
    <>
        <h4 class="text-light mt-5 ">List siswa :</h4>
        <ol>
            @foreach ($kels->stud as $vie)
              <li class="text-light ">{{ $vie->nama }}</li>  
            @endforeach
        </ol>   

            
    </div>
              
        
    </div>
    
@endsection