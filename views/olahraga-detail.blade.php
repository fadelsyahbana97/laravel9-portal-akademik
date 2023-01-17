@extends('tampilan')
@section('titel','student-detail')

@section('content')

<div class="container ">
    <h2 class="text-light mb-4">Data Olahraga  {{ $olahe->nama }}</h2>
    
    <div>
        <h3 class="text-light mt-5 ">List Peserta :</h3>
        <ol>
            @foreach ($olahe->student as $vie)
              <li class="text-light ">{{ $vie->nama }}</li>  
            @endforeach
        </ol>   
    </div>
              
        
    </div>
    
@endsection