@extends('layouts.app')

@section('title','Showtime Details')

@section('content')
<h3>{{ $showtime->movie->title }} — {{ \Carbon\Carbon::parse($showtime->schedule)->format('M d, Y h:i A') }}</h3>
<p>Hall: {{ $showtime->hall_number }}</p>

<h5>Tickets</h5>
<ul class="list-group">
  @foreach($showtime->tickets as $ticket)
    <li class="list-group-item d-flex justify-content-between">
      <div>{{ $ticket->customer_name }} — Seat {{ $ticket->seat_number }}</div>
      <div>₱{{ number_format($ticket->price,2) }}</div>
    </li>
  @endforeach
</ul>
@endsection
