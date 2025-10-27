@extends('layouts.app')

@section('title','Movies')

@section('content')
<h2>Movies</h2>
@foreach($movies as $movie)
  <div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">{{ $movie->title }} <small class="text-muted">({{ $movie->genre }})</small></h5>
      <p>Duration: {{ $movie->duration }} min | Rating: {{ $movie->rating }}</p>

      <h6>Showtimes</h6>
      <div class="table-responsive">
        <table class="table table-sm table-striped">
          <thead>
            <tr><th>Schedule</th><th>Hall</th><th>Tickets Sold</th><th>Action</th></tr>
          </thead>
          <tbody>
            @foreach($movie->showtimes as $showtime)
              <tr>
                <td>{{ \Carbon\Carbon::parse($showtime->schedule)->format('M d, Y h:i A') }}</td>
                <td>{{ $showtime->hall_number }}</td>
                <td>{{ $showtime->tickets->count() }}</td>
                <td><a href="{{ route('showtimes.show', $showtime->id) }}" class="btn btn-sm btn-outline-primary">View</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endforeach

{{ $movies->links() }}
@endsection
