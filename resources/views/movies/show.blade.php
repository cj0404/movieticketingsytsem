@extends('layouts.app')

@section('title', $movie->title)

@section('content')
<h2>{{ $movie->title }} <small class="text-muted">{{ $movie->genre }}</small></h2>
<p>Duration: {{ $movie->duration }} min | Rating: {{ $movie->rating }}</p>

<h4>Showtimes</h4>
<ul class="list-group mb-3">
  @foreach($movie->showtimes as $showtime)
    <li class="list-group-item">
      <strong>{{ \Carbon\Carbon::parse($showtime->schedule)->format('M d, Y h:i A') }}</strong> - Hall {{ $showtime->hall_number }}
      <div class="float-end">
        Tickets sold: {{ $showtime->tickets->count() }}
        <a href="{{ route('showtimes.show', $showtime->id) }}" class="btn btn-sm btn-outline-secondary ms-2">View</a>
      </div>
    </li>
  @endforeach
</ul>
@endsection
