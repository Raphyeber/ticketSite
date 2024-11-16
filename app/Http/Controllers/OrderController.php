<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;

class OrderController extends Controller
{
    public function index() {
        return view('order', [
            'orders' => Order::where('user_id', Auth::id())->get()
        ]);
    }

    public function review(Request $request, Order $order)
    {
        $validatedData = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required',
        ]);

        $validatedData['order_id'] = $order->id;
        $validatedData['user_id'] = Auth::id();
        $validatedData['ticket_id'] = $order->ticket->id;
        
        Review::create($validatedData);
        return back()->with('success', 'Ulasan telah ditambahkan!');
    }
}
