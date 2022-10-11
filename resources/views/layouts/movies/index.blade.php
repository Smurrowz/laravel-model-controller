@extends('layouts.app')

@section('content')
<div>
  
  @foreach($movies as $movie) 
  <div class="card">
    <h3>Titolo : {{$movie->title}}</h3>
    <p>Titolo Originale : {{$movie->original_title}}</p>
    <p>Nazionalita' : {{$movie->nationality}}</p>
    <span>Data di uscita : {{$movie->date}}</span>
    <span>Voto : {{$movie->vote}}</span>
  </div>
  @endforeach

</div>

@endsection