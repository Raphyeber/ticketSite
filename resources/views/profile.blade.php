@extends('layouts/main')
@section('content')
  <div class="profile">
    <div class="detail">
      <div class="name">{{ auth()->user()->name }}</div>
      {{ auth()->user()->email }}
    </div>

    <ul>
      <li>
        <a href="my-order">
          <div class="text">Pesanan saya <span class="fas fa-history"></span></div>
          <div class="fas fa-chevron-right"></div>
        </a>
      </li>
      <li>  
        <form method="post" action="/logout">
          @csrf
          <button type="submit">LogOut</button>
        </form>
      </li>
    </ul>
  </div>



@endsection

