<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Movie Theater - @yield('title', 'Home')</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <style>
    body { padding-top: 70px; }
    .banner { background: url('/images/banner.jpg') center/cover no-repeat; height: 320px; display:flex; align-items:center; color:white; }
    .card-movie { min-height: 180px; }
  </style>
</head>
<body>
  @include('partials.navbar')
  <main class="container my-4">
    @yield('content')
  </main>
  @include('partials.footer')

  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
