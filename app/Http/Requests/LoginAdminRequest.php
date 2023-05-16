<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginAdminRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email'=>'required|email',
            'password'=>'required|min:5',
            'remember_token'=>'nullable|int'
        ];
    }
}
