<?php

namespace App\Models;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'name',
        'slug',
    ];

    public function ticket(){
        return $this->hasMany(Ticket::class);
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
