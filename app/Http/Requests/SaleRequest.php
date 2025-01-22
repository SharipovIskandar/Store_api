<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaleRequest extends FormRequest
{
    public function rules()
    {
        return [
            'dateFrom' => 'nullable|date_format:Y-m-d',
            'dateTo' => 'nullable|date_format:Y-m-d',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
