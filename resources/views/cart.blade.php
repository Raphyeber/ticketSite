@extends('layouts/main')
@section('content')
<div class="cart">
 
  <div class="items">
    <table>
      <tr>
        <th>Item</th>
        <th>Price</th>
      </tr>
      <tr>
        <td>
          <div class="item">
            <div class="image" style="background-image: url('{{ $ticket->imageURL }}')"></div>
            <div>{{ $ticket->name }}</div>
          </div>
        </td>
        <td>{{ number_format($ticket->price) }}</td>
      <tr>
    </table>
  </div>

  <div class="payment">
    <div class="container">
      <div class="title">Total</div>
      <div class="price">Rp {{ number_format($ticket->price) }}</div>
      <form method="post">
        @csrf
        <button>Beli</button>
      </form>
    </div>
  </div>
</div>

  
@endsection

