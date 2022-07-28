<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        // dd($request->route('id'));
        $rules = [];
        $currentAction = $this->route()->getActionMethod(); //để lấy phương thức hiện tại
        switch ($this->method()):
            case 'POST':
                switch ($currentAction) {
                    case 'store':
                        $rules = [
                            "name" => "required|unique:categories",
                        ];
                    case 'update':
                        $rules = [
                            "name" => "required",
                        ];
                    default:
                        break;
                }
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
        ];
    }
}
