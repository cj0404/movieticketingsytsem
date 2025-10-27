@extends('layouts.app')

@section('title','Welcome')

@section('content')
<div class="banner rounded mb-4" style="background-color:#222;">
  <div class="container text-center">
    <h1 class="display-4">Now Showing</h1>
    <p class="lead">Grab your popcorn — cinematic adventures await.</p>
  </div>
</div>

<div class="row">
  @foreach($movies as $movie)
    <div class="col-md-4 mb-3">
      <div class="card card-movie">
        <div class="card-body">
          <h5 class="card-title">{{ $movie->title }}</h5>
          <p class="card-text">
            Genre: {{ $movie->genre }}<br>
            Duration: {{ $movie->duration }} min<br>
            Showtimes: {{ $movie->showtimes_count }}
          </p>
          <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-primary">View</a>
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection
@extends('layouts.app')

@section('title','Welcome')

@section('content')
<div class="banner rounded mb-4" style="background-color:#222;">
  <div class="container text-center">
    <h1 class="display-4">Now Showing</h1>
    <p class="lead">Grab your popcorn — cinematic adventures await.</p>
  </div>
</div>

<div class="row">
    @foreach($movie as $movies)
        <div class="col-md-4 mb-3">
            <div class="card card-movie">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">
                        Genre: {{ $movie->genre }}<br>
                        Duration: {{ $movie->duration }} min<br>
                        Showtimes: {{ $movie->showtimes_count }}
                    </p>
                    <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
