@extends('layouts.main')
@section('content')
    <div class="ticket">
        <div class="ticket-detail">
            <div class="name">{{ $ticket->name }}</div>
            {{ $ticket->description }}
        </div>
  
        @if($ticket->review->isNotEmpty())
            <div class="ticket-review">
                <div class="title">Ulasan</div>
                <ul>
                    @foreach($reviews as $review)
                        <li>
                            <div class="name">{{ $review->user->name }}</div>
                            <div class="rating">
                                @for ($i = 1; $i <= $review->rating; $i++)
                                    <span class="fa-solid fa-star filled"></span>
                                @endfor
                                @for ($i = 1; $i <= 5-$review->rating; $i++)
                                    <span class="fa-solid fa-star"></span>
                                @endfor
                            </div>
                            {{ $review->review }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="hidden-container"></div>
        <div class="ticket-price">
            <div>
                <div class="title">{{ $ticket->name }}</div>
                <div class="price">Rp. {{ number_format($ticket->price) }}</div>
            </div>
            <a href="/tickets/{{ $ticket->slug }}/buy">Beli</a>
        </div>
    </div>
@endsection


