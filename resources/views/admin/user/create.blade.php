@extends('admin.layouts.main')
@section('content')
  <form class="form" method="post" action="/admin/user">
    @csrf
    <label for="name">Nama</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}">
    @error('name') <div class="error"> {{ $message }}</div> @enderror
    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="{{ old('email') }}">
    @error('email') <div class="error"> {{ $message }}</div> @enderror
    <label for="password">Password</label>
    <input type="password" id="password" name="password">
    @error('password') <div class="error"> {{ $message }}</div> @enderror
    <label for="role">Role</label>
    <select id="role" name="role">
      @if(old('role') == 'admin')
        <option value="admin" selected>admin</option>
      @else
        <option value="admin">admin</option>
      @endif
      @if(old('role') == 'customer')
        <option value="customer" selected>customer</option>
      @else
        <option value="customer">customer</option>
      @endif
    </select>
    @error('role') <div class="error"> {{ $message }}</div> @enderror
    <button type="submit">Tambah Pengguna</button>
  </form>
@endsection