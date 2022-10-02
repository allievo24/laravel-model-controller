@extends('layout.app')
@section('title','Hompage Movies')
@section('content')
<h1>Ecco la Lista dei film</h1>

 @forelse ($Movies as $Movie)
  <div class='container'>
    <div class='text'>
        <h3>{{$Movie->title}}</h3>
        <h2>{{$Movie->original_title}}</h2>
        <span>{{$Movie->nationality}}</span>
        <span>{{$Movie->date}}</span>
        <span>{{$Movie->vote}}</span>


    </div>
  </div>
     
 @empty
   Il film non è presente nella lista
     
 @endforelse



@endsection
    
