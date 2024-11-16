<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class HomeController extends Controller
{
    public function index() {
        return view('home', [
            "tickets" => Ticket::limit(5)->get()
        ]);
    }
}
