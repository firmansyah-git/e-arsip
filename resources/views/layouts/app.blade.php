<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,800;1,700&display=swap" rel="stylesheet">
</head>
<body>
  <header id="header" class="header">
    @include('layouts.header')
  </header>

  <aside id="sidebar" class="aside-opened">
    @include('layouts.sidebar')
  </aside>

  <main id="main" class="main">
    @yield('container')
  </main>

  <footer>    
    @include('layouts.footer')
  </footer>
</body>
<script src="{{ asset('assets/js/index.js') }}"></script>
</html>