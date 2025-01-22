<?php

namespace App\Models;

use App\Traits\Crud;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory, Crud;

    protected $fillable = [
        'product_id',
        'quantity',
        'updated_at',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
