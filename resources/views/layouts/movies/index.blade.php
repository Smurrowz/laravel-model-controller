@extends('layouts.app')

@section('content')
<div class="movies">
  <h1 class="title">Movies:</h1>
  <div class="card-container">
    @foreach($movies as $movie) 
    <div class="card">
      <h2>{{$movie->title}}</h2>
      <p> <span class="card-text"> Titolo Originale : </span>{{$movie->original_title}}</p>
      <p><span class="card-text">Nazionalita' : </span>{{$movie->nationality}}</p>
      <p><span class="card-text">Data di uscita : </span>{{$movie->date}}</p>
      <p><span class="card-text">Voto : </span>{{$movie->vote}}</p>
    </div>
    @endforeach

  </div>

</div>

@endsection