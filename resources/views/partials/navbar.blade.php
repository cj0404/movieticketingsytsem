<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">🎬 Movie Theater</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="{{ route('home.index') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('movies.index') }}">Movies</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('showtimes.index') }}">Showtimes</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('tickets.index') }}">Tickets</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
        </ul>
      </div>
    </div>
  </nav>
  
  
</body>
</html>