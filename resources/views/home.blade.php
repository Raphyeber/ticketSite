@extends('layouts/main')


@section('content')
  <div class="hero" style="background-image: url('https://images.pexels.com/photos/933054/pexels-photo-933054.jpeg?cs=srgb&dl=pexels-joyston-judah-331625-933054.jpg&fm=jpg');">
    <div class="hero-content">
      <div class="title">Pembelian tiket mudah dan cepat</div>
      <a href="/tickets">lihat tiket</a>
    </div>
  </div>

  <div class="tickets">
    <div class="title">
      <div class="text">Tiket</div>
      <a href="/tickets">lihat semua</a>
    </div>
    <ul>
      @foreach ($tickets as $ticket)

        <li>
          
          <a href="/tickets/{{ $ticket['slug'] }}"> 
            <img src="{{ $ticket['imageURL'] ?? 'https://www.its.ac.id/tmesin/wp-content/uploads/sites/22/2022/07/no-image.png' }}">
            <div class="content">
              <div class="name">{{ $ticket['name'] }}</div>
              <div class="price">Rp {{ $ticket['price'] }}</div>
            </div>  
          </a>
        </li>
      @endforeach
    </ul> 
  </div>

  
@endsection

