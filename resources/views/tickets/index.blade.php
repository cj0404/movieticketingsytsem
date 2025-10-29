<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ticket</title>
</head>
<body>
  @extends('layouts.app')

@section('content')
<h2>Tickets</h2>
<table class="table table-hover">
    <thead class="table-dark">
        <tr>
            <th>Customer</th>
            <th>Seat</th>
            <th>Movie</th>
            <th>Showtime</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tickets as $ticket)
        <tr>
            <td>{{ $ticket->customer_name }}</td>
            <td>{{ $ticket->seat_number }}</td>
            <td>{{ $ticket->showtime->movie->title }}</td>
            <td>{{ $ticket->showtime->schedule }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

  
</body>
</html>
