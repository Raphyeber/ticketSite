<?php

namespace App\Models;


use App\Models\Category;
use App\Models\Review;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'imageURL',
        'category_id'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function order() {
        return $this->hasMany(Order::class);
    }

    public function review() {
        return $this->hasMany(Review::class);
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
