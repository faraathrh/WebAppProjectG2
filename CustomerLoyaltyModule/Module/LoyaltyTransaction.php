<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoyaltyTransaction extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'amount', 'points_earned', 'description'];

    public function customer()
    {
        return $this->belongsTo(LoyaltyCustomer::class);
    }
}