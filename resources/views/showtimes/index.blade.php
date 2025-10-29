<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Showtime</title>
</head>
<body>
  @extends('layouts.app')

@section('content')
<h2>Showtimes</h2>
<table class="table table-striped">
    <thead class="table-dark">
        <tr>
            <th>Movie</th>
            <th>Schedule</th>
            <th>Hall</th>
            <th>Tickets Sold</th>
        </tr>
    </thead>
    <tbody>
        @foreach($showtimes as $showtime)
        <tr>
            <td>{{ $showtime->movie->title }}</td>
            <td>{{ $showtime->schedule }}</td>
            <td>{{ $showtime->hall_number }}</td>
            <td>{{ $showtime->tickets->count() }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

  
</body>
</html>
