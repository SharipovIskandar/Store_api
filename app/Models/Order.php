<?php

namespace App\Models;

use App\Traits\Crud;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory, Crud;

    protected $fillable = [
        'customer_id',
        'product_id',
        'quantity',
        'total_price',
        'order_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
