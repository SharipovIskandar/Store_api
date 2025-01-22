<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IncomeResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'income_date' => $this->income_date,
            'total_income' => $this->total_income,
        ];
    }
}
