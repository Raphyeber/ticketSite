@extends('admin.layouts.main')
@section('content')
  <form class="form" method="post" action="/admin/category">
    @csrf
    <label for="name">Nama</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}">
    @error('name') <div class="error"> {{ $message }}</div> @enderror
    <label for="slug">Slug</label>
    <input type="text" id="slug" name="slug" value="{{ old('slug') }}">
    @error('slug') <div class="error"> {{ $message }}</div> @enderror
    <button type="submit">Tambah Kategori</button>
  </form>
@endsection