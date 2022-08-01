<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponRequest extends FormRequest
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
        $rules = [];
        $id = $this->route()->id;
        switch ($this->method()):
            case 'POST':
                $rules = [
                    'name' => "required|unique:coupons,name",
                    'code' => 'required|unique:coupons,code',
                    'value' => 'required',
                    'start_time' => 'required',
                    'end_time' => 'required'
                ];
                break;
            case 'PUT':
                $rules = [
                    'name' => "required|unique:coupons,name,$id",
                    'code' => 'required|unique:coupons,code,' . $id,
                    'value' => 'required',
                    'start_time' => 'required|date',
                    'end_time' => 'required|date'
                ];
                break;
            default:
                break;
        endswitch;
        return $rules;
    }
    public function messages()
    {
        return [
            'name.required' => 'Moi ban nhap ten khuyen mai',
            'name.unique' => 'Ten khuyen mai da ton tai',
            'code.required' => 'Moi nhap ma code',
            'code.unique' => 'Ma code da ton tai',
            'value.required' => 'Moi nhap gia tri',
            'start_time.required' => 'Moi chon ngay bat dau',
            'start_time.date' => 'Hay nhap dung dinh dang',
            'end_time.required' => 'Moi chon ngay ket thuc',
            'end_time.date' => 'Hay nhap dung dinh dang',
        ];
    }
}
