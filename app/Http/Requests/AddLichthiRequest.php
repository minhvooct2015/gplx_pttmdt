<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddLichthiRequest extends FormRequest
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
            //

            'ngt'=>'unique:cbsh_lichthi,lt_ngaythi'
        ];
    }
    public function messages()
    {
        return 
        [
            'ngt.unique'=>'Ngày thi đã bị trùng!'
        ];
        
    }
}
