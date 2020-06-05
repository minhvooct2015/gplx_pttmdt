<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class themhxRequest extends FormRequest
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
        return  
        [
            // unique 2 tham số tên bảng và tên cột k mong muốn bị trùng
            'name'=>'unique:cbsh_hangxe,hx_ten'
        ];
    }
     public function messages()
    {
        return 
        [
            'name.unique'=>'Tên danh mục đã bị trùng'
        ];
        
    }
}
