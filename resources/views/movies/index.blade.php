<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movies</title>
</head>
<body>
  @extends('layouts.app')

@section('content')
<h2>Movies</h2>
<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Duration</th>
            <th>Rating</th>
        </tr>
    </thead>
    <tbody>
        @foreach($movies as $movie)
            <tr>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->genre }}</td>
                <td>{{ $movie->duration }} mins</td>
                <td>{{ $movie->rating }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection


  
</body>
</html>