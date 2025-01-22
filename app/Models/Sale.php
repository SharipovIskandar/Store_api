<?php

namespace App\Models;

use App\Traits\Crud;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory, Crud;

    protected $fillable = [
        'order_id',
        'sale_date',
        'total_income',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
