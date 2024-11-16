<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
</head>
<body>
  <div class="register">
    <div class="container">
      <div class="title">Buat Akun</div>
      <form method="post">
        @csrf
        <label for="name">Nama</label>
        <input type="name" id="name" name="name" value="{{ old('name') }}">
        @error('name') <div class="error"> {{ $message }}</div> @enderror
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}">
        @error('email') <div class="error"> {{ $message }}</div> @enderror
        <label for="password">Kata Sandi</label>
        <input type="password" id="password" name="password">
        @error('password') <div class="error"> {{ $message }}</div> @enderror
        <button type="submit">Sign Up</button>
      </form>
      <div class="text">
        Sudah memiliki akun? <a href="/login">Masuk</a>
      </div>
    </div>
  </div>
  
</div>
</body>
</html>