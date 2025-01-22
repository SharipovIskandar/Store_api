<?php

namespace App\Models;

use App\Traits\Crud;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, Crud;

    protected $fillable = [
        'name',
        'price',
        'description',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }
}
