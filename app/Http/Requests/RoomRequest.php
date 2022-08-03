<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
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
        $id = $this->route()->room;
        $rules = [];
        $currentAction = $this->route()->getActionMethod(); //để lấy phương thức hiện tại
        switch ($this->method()):
            case 'POST':
                $rules = [
                    "name" => "required|unique:rooms",
                    'price' => "required",
                    'image' => "required|image",
                ];
                break;
            case 'PUT':
                $rules = [
                    "name" => "required|unique:rooms,name,$id,id",
                    'price' => "required",
                    'image' => "image",
                ];
            default:
                break;
        endswitch;
        return $rules;
    }
    public function messages()
    {
        return [
            'name.required' => "Moi ban nhap ten",
            'name.unique' => "Ten da ton tai",
            'price.required' => "Moi ban nhap gia",
            'image.required' => "Moi ban chon anh",
            'image.image' => "Anh khong dung dinh dang",
        ];
    }
}
