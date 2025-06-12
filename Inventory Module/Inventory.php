<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'product',
        'category',
        'unit_type',
        'current_stock',
        'max_stock',
        'min_threshold',
    ];
}
