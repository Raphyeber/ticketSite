<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class AdminOrderController extends Controller
{
    public function index()
    {
        return view('admin.order.index', [
            'orders' => Order::all()
        ]);
    }

    public function destroy(Order $order)
    {
        Order::destroy($order->id);
        return redirect('admin/order')->with('success', 'Pesanan berhasil dihapus!');
    }

}
