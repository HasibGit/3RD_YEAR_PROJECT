<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $fillable = [
        'customer_name',
        'customer_email',
        'product_name',
        'product_price',
        'cashback',
        'expireDate'
    ];
}
