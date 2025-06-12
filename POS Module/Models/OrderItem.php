<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'ordered_items'; // <-- Fix table name here

    protected $fillable = [
        'order_id', 'item_name', 'item_price', 'quantity'
    ];
}
