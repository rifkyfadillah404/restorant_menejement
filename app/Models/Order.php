<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'costumer_name',
        'total_price',
        'order_date',
    ];
}
