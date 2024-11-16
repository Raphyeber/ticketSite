<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
</head>
<body>
  @if(session()->has('success'))
    {{ session('success') }}
  @endif

  @if(session()->has('loginError'))
    {{ session('loginError') }}
  @endif
  <div class="register">
    <div class="container">
      <div class="title">Masuk</div>
      <form method="post">
        @csrf
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email')}}">
        @error('email') <div class="error"> {{ $message }}</div> @enderror
        <label for="password">Kata Sandi</label>
        <input type="password" name="password" id="password">
        @error('password') <div class="error"> {{ $message }}</div> @enderror
        <button type="submit">Masuk</button>
        <div class="text">Sudah memiliki akun? <a href="/register">Masuk</a></div>
      </form>
    </div>
  </div>
</body>
</html>