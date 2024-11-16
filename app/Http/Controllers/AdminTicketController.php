<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Category;

class AdminTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.ticket.index', [
            "tickets" => Ticket::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ticket.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:tickets|max:255',
            'imageURL' => 'nullable|url',
            'price' => 'required',
            'category_id' => 'required',
            'description' => 'required'
        ]);

        Ticket::create($validatedData);

        return redirect('/admin/ticket')->with('success', 'Tiket berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        return view('admin.ticket.edit', [
            'categories' => Category::all(),
            'ticket' => $ticket
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {

        $rules = [
            'name' => 'required|max:255',
            'price' => 'required',
            'imageURL' => 'nullable|url',
            'category_id' => 'required',
            'description' => 'required'
        ];

        if($request->slug != $ticket->slug) {
            $rules['slug'] = 'required|unique:tickets|max:255';
        } 

        $validatedData = $request->validate($rules);
        Ticket::where('id', $ticket->id)->update($validatedData);
        return redirect('/admin/ticket')->with('success', 'Tiket berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        Ticket::destroy($ticket->id);
        return redirect('admin/ticket')->with('success', 'Tiket telah dihapus!');
    }
}
