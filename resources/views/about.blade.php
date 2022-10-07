
@extends('layouts.main')

@section('container')
   <h1>Halaman About</h1> 
  <h3> {{$name}} </h3>
   <p> {{$email}} </p>
   <img src="IMG/{{$image}}" alt="{{$name}}" width= "500" class="img-thumbnail rounded-circle">
@endsection
