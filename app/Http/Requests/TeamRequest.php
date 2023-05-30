<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TeamRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'fullname'=>'required|string|min:3',
            'title'=>'required|string|min:3',
            'text'=>'required|string|min:3',
            'image'=>[Rule::requiredIf($this->method()=='POST'),'image','mimes:png,jpg,jpeg'],
        ];
    }
}
