@extends('layouts.app')

@section('title','Showtimes')

@section('content')
<h2>All Showtimes</h2>
<table class="table table-striped">
  <thead>
    <tr><th>Movie</th><th>Schedule</th><th>Hall</th><th>Tickets</th><th></th></tr>
  </thead>
  <tbody>
    @foreach($showtimes as $st)
      <tr>
        <td>{{ $st->movie->title }}</td>
        <td>{{ \Carbon\Carbon::parse($st->schedule)->format('M d, Y h:i A') }}</td>
        <td>{{ $st->hall_number }}</td>
        <td>{{ $st->tickets->count() }}</td>
        <td><a href="{{ route('showtimes.show', $st->id) }}" class="btn btn-sm btn-primary">Details</a></td>
      </tr>
    @endforeach
  </tbody>
</table>
{{ $showtimes->links() }}
@endsection
