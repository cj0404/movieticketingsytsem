@extends('layouts.app')

@section('title','Tickets')

@section('content')
<h2>Tickets</h2>
<table class="table table-hover">
  <thead>
    <tr><th>Customer</th><th>Movie</th><th>Schedule</th><th>Seat</th><th>Price</th></tr>
  </thead>
  <tbody>
    @foreach($tickets as $ticket)
      <tr>
        <td>{{ $ticket->customer_name }}</td>
        <td>{{ optional($ticket->showtime->movie)->title }}</td>
        <td>{{ \Carbon\Carbon::parse(optional($ticket->showtime)->schedule)->format('M d, Y h:i A') }}</td>
        <td>{{ $ticket->seat_number }}</td>
        <td>₱{{ number_format($ticket->price,2) }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
{{ $tickets->links() }}
@endsection
