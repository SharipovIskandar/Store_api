<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function rules()
    {
        return [
            'dateFrom' => 'nullable|date_format:Y-m-d',
            'dateTo' => 'nullable|date_format:Y-m-d',
            'limit' => 'nullable|integer|min:1|max:500',
            'page' => 'nullable|integer|min:1',
        ];
    }

    public function authorize()
    {
        return true;
    }
}

