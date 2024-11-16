@extends('layouts.main')
@section('content')
  <div class="tickets">
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


