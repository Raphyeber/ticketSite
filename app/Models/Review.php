<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Ticket;

class Review extends Model
{
    protected $fillable = [
        'review',
        'order_id',
        'rating',
        'user_id',
        'ticket_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function ticket(){
        return $this->belongsTo(Ticket::class);
    }

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
