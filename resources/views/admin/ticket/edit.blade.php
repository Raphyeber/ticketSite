@extends('admin.layouts.main')
@section('content')
  <form class="form" method="post" action="/admin/ticket/{{ $ticket->slug }}">
    @method('put')
    @csrf
    <label for="name">Nama</label>
    <input type="text" id="name" name="name" value="{{ old('name', $ticket->name) }}">
    @error('name') <div class="error"> {{ $message }}</div> @enderror
    <label for="slug">Slug</label>
    <input type="text" id="slug" name="slug" value="{{ old('slug', $ticket->slug) }}">
    @error('slug') <div class="error"> {{ $message }}</div> @enderror
    <label for="description">Deskripsi</label>
    <textarea id="description" name="description">{{ old('description', $ticket->description) }}</textarea>
    @error('description') <div class="error"> {{ $message }}</div> @enderror
    <label for="price">Harga</label>
    <input type="number" id="price" name="price" value="{{ old('price', $ticket->price) }}">
    @error('price') <div class="error"> {{ $message }}</div> @enderror
    <label for="imageURL">Gambar</label>
    <input type="text" id="imageURL" name="imageURL" value="{{ old('imageURL', $ticket->imageURL) }}">
    @error('imageURL') <div class="error"> {{ $message }}</div> @enderror
    <label for="category">Kategori</label>
    <select id="category" name="category_id">
      @foreach($categories as $category)
        @if(old('category_id', $ticket->category_id) == $category->id)
          <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
        @else
          <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endif
      @endforeach
    </select>
    @error('category') <div class="error"> {{ $message }}</div> @enderror
    <button type="submit">Ubah tiket</button>
  </form>
@endsection