<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="{{ asset('css/admin.css') }} ">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
  <div class="topnav">
    <div class="menu">
      <div onclick="showMenu(this);" class="icon fas fa-bars"></div>
      <a href="/admin"><div class="icon fas fa-home"></div></a>
    </div>
    <div class="admin">
      <a href="#"><span class="name">Halo, {{ auth()->user()->name }}</span></a>
    </div>
  </div>
  <div class="sidebar">
    <ul class="menu-list">
      <li class="{{ Request::is('admin') ? 'active' : ''}}"><a href="/admin"><div class="icon fas fa-border-all"></div>Dashboard</a></li>
      <li class="{{ Request::is('admin/ticket*') ? 'active' : ''}}"><a href="/admin/ticket"><div class="icon fas fa-ticket"></div>Tiket</a></li>
      <li class="{{ Request::is('admin/order*') ? 'active' : ''}}"><a href="/admin/order"><div class="icon fas fa-cart-shopping"></div>Pesanan</a></li>
      <li class="{{ Request::is('admin/category*') ? 'active' : ''}}"><a href="/admin/category"><div class="icon fas fa-object-group"></div>Kategori</a></li>
      <li class="{{ Request::is('admin/user*') ? 'active' : ''}}"><a href="/admin/user"><div class="icon fas fa-user"></div>User</a></li>
      <li class="{{ Request::is('admin/review*') ? 'active' : ''}}"><a href="/admin/review"><div class="icon fas fa-star"></div>Ulasan</a></li>
    </ul>
  </div>

  <div class="content">
    @yield('content')
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>