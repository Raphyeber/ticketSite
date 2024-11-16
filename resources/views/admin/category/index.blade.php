@extends('admin.layouts.main')
@section('content')
  <a class="animated-button" href="/admin/category/create">
    Tambah kategori
    <div class="circle"><div class="icon fa-solid fa-plus"></div></div>
  </a>

  <div style="overflow-x: auto;">
    <table class="table">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Aksi</th>
      </tr>
      @foreach($categories as $category)
      <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name }}</td>
          <td>
            <div style="white-space: nowrap">
              <a href="/admin/category/{{ $category->slug }}/edit"><span class="fas fa-edit"></span></a>
              <form action="/admin/category/{{ $category->slug }}" method="post">
                @method('delete')
                @csrf
                <button type="submit"><span class="fas fa-trash"></span></button>
              </form>
            </div>
          </td>
      </tr>
      @endforeach
    </table>
  </div>

  @if(session()->has('success'))
    <div class="alert success">
      <div class="message">{{ session('success') }}</div>
      <div class="close" onclick="closeAlert()"><span class="fas fa-times"></span></div>
    </div>
  @endif
@endsection