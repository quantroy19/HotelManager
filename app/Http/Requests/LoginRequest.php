<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "email" => "required|email",
            "password" => "required|min:8"
        ];
    }
    public function messages()
    {
        return [
            "email.required" => "Moi ban nhap email",
            "email.email" => "Email khong dung dinh dang",
            "password.required" => "Moi ban nhap password",
            "password.min" => "Password phai lon hon 8",
        ];
    }
}
