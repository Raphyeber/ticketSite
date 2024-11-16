<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  
</head>
<body>
<div class="navbar">
  <a class="logo" href="/">
    BINTICKET
  </a>

    @auth
      <a href="/profile"> Halo, {{ auth()->user()->name }}</a>
    @else
    <ul class="menu">
      <li><a href="/login" class="login">Login</a></li>
      <li><a href="/register" class="register">Daftar</a></li>
    </ul>
    @endauth
</div>

<div class="content">
  @yield('content')
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>


</body>
</html>