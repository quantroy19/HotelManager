<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
    public function rules()
    {
        $id = $this->route()->id;
        $rules = [];
        $currentAction = $this->route()->getActionMethod(); //để lấy phương thức hiện tại
        switch ($this->method()):
            case 'POST':
                $rules = [
                    "name" => "required|unique:banners",
                    'image' => "required|image",
                    'link' => 'url'
                ];
                break;
            case 'PUT':
                $rules = [
                    "name" => "required|unique:banners,name,$id,id",
                    'image' => "image",
                    'link' => 'url'
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
            'image.required' => "Moi ban chon anh",
            'image.image' => "Anh khong dung dinh dang",
            'link.url' => "nhap khong dung dinh dang url",
        ];
    }
}
