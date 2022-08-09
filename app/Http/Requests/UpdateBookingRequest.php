<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookingRequest extends FormRequest
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
            "name" => "required|unique:users",
            'phone' => 'required|',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Không được để trống",
            'phone.required' => "Không được để trống",
        ];
    }
}
