<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'order_date' => $this->order_date,
            'customer_id' => $this->customer_id,
            'total_price' => $this->total_price,
        ];
    }
}
