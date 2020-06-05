<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditloaiLHRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //true
             'name'=>'unique:cbsh_loailichhoc,llh_ten,'.$this->segment(4).',llh_id'
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
