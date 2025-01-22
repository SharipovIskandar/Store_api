<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $this->route('user'),
            'password' => 'nullable|string|min:8|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Foydalanuvchi nomi majburiy.',
            'email.required' => 'Email manzili majburiy.',
            'email.unique' => 'Ushbu email manzili allaqachon ro\'yxatdan o\'tgan.',
            'password.min' => 'Parol kamida 8 ta belgidan iborat bo\'lishi kerak.',
        ];
    }
}
