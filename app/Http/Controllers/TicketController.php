<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Review;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function index() {
        return view('ticket', [
            "tickets" => Ticket::all()
        ]);
    }

    public function show(Ticket $ticket) {
        return view('detail', [
            "ticket" => $ticket,
            "reviews" => Review::where('ticket_id', $ticket->id)->get()
        ]);
    }

    public function buy(Request $request, Ticket $ticket)
    {
        return view('cart',[
            'ticket' => $ticket,
        ]);
    }

    public function order(Request $request, Ticket $ticket)
    {
        $data['ticket_id'] = $ticket->id;
        $data['name'] = $ticket->name;
        $data['price'] = $ticket->price;
        $data['user_id'] = Auth::user()->id;

   
        Order::create($data);
        return redirect('/my-order');
         
     
    }
}
