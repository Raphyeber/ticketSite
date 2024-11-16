@extends('layouts/main')

@section('content')



<div class="order">
  <ul>
    @foreach($orders as $order)
      <li>
        <div class="name">{{ $order->name }}</div>
        <div class="text">Total Harga:</div>
        <div class="price">RP {{ number_format($order->price) }}</div>
          @if($order->review)
            <div class="rating">
              @for ($i = 0; $i < $order->review->rating; $i++)
                <span class="fas fa-star filled"></span>
              @endfor
              @for ($i = 0; $i < 5-$order->review->rating; $i++)
              <span class="fas fa-star"></span>
              @endfor
            </div>
            <div class="text">Ulasan:<div>
            <div class="text">{{ $order->review->review }}</div>
          @else
            <div class="text">Tulis Ulasan:</div>
            <form method="post" action="/my-order/{{ $order->id }}/review/">
              @csrf
              <input type="number" name="rating" min="1" max="5" placeholder="Rating(1-5)"></input>
              <textarea placeholder="Tulis review" name="review"></textarea>
              <button type="submit">Beri Ulasan</button>
            </form>
          @endif
      </li>
    @endforeach
  </ul>
</div>

  
@endsection

