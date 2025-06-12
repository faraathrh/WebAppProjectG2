<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoyaltyPoints extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'points'];

    public function customer()
    {
        return $this->belongsTo(LoyaltyCustomer::class);
    }
}
