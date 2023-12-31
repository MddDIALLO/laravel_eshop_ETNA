<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    public $table = 'order_products';

    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'total_amount',
    ];
}
