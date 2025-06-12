<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['payment_method', 'status', 'total_price'];

    public function items()
    {
    return $this->hasMany(OrderItem::class, 'order_id'); // no need to change if model is correct
    }
}

