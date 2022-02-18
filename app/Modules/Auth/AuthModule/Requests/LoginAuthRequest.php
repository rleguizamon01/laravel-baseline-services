<?php

namespace App\Modules\Auth\AuthModule\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginAuthRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ];
    }
}
