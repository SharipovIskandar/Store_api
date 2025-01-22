<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SaleResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'sale_date' => $this->sale_date,
            'customer_id' => $this->customer_id,
            'product_id' => $this->product_id,
            'quantity' => $this->quantity,
            'total_price' => $this->total_price,
        ];
    }
}
