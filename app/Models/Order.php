<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;
use App\Models\Review;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'price',
        'ticket_id',
    ];

    public function ticket(){
        return $this->belongsTo(Ticket::class);
    }

    public function review(){
        return $this->hasOne(Review::class);
    }

    public function user(){
        return $this->belongsTo(Ticket::class);
    }
}
