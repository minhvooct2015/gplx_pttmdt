<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditChohocRequest extends FormRequest
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
             'name'=>'unique:cbsh_chohoc,ch_ten,'.$this->segment(4).',ch_id'
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
