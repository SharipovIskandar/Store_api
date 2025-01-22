<?php

namespace App\Models;

use App\Traits\Crud;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory, Crud;

    protected $fillable = [
        'sale_id',
        'income_date',
        'amount',
    ];

    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }
}
