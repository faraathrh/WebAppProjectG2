<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LoyaltyCustomer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'birth_date'];

    public function points()
    {
        return $this->hasOne(LoyaltyPoints::class, 'customer_id');
    }

    public function transactions()
    {
        return $this->hasMany(LoyaltyTransaction::class, 'customer_id');
    }
}
