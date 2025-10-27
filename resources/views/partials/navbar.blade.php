<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">CinemaX</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('movies.index') }}">Movies</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('showtimes.index') }}">Showtimes</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('tickets.index') }}">Tickets</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
      </ul>
    </div>
  </div>
</nav>
