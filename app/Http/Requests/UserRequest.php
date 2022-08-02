<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $id = $this->route()->id;
        $rules = [];
        $currentAction = $this->route()->getActionMethod(); //để lấy phương thức hiện tại
        switch ($this->method()):
            case 'POST':
                $rules = [
                    "name" => "required|unique:users",
                    'email' => 'required|email|unique:users',
                    'phone' => 'required|min:10|max:11',
                    'address' => 'required|min:6',
                    'password' => 'required|min:8',
                    're-password' => 'required|same:password',
                    'image' => 'image'
                ];
                break;
            case 'PUT':
                $rules = [
                    "name" => "required|unique:users,name,$id,id",
                    'email' => 'required|unique:users,email,' . $id . '',
                    'phone' => 'required|min:10|max:11',
                    'address' => 'required|min:6',
                    'password' => 'required|min:8',
                    're-password' => 'required|same:password',
                    'image' => 'image'
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
            'name.required' => 'Mời bạn nhập ten',
            'name.unique' => 'Ten da ton tai',
            'email.required' => 'Mời bạn nhập email',
            'email.email' => 'Mời bạn nhập đúng định dạng email',
            'email.unique' => 'Email da ton tai',
            'phone.required' => 'Mời bạn nhập so dien thoai',
            'phone.max' => 'So dien thoai khong hop le',
            'phone.min' => 'o dien thoai khong hop le',
            'address.required' => 'Mời bạn nhập dia chi',
            'password.required' => 'Mời bạn nhập password',
            'password.min' => 'Password khong du kys tu',
            're-password.required' => 'Mời bạn nhập xác nhận mật khau',
            're-password.same' => 'Mat khau khong khop',
            'image.image' => 'khong dung dinh dang',
            'image.required' => 'Moi nhap anh',

        ];
    }
}
