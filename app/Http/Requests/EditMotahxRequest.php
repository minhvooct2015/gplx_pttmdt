<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditMotahxRequest extends FormRequest
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
             'hx'=>'unique:motahangxe,id_hx,'.$this->segment(4).',mthx_id'
       
        ];
    }
    public function messages()
    {
        return 
        [
            'hx.unique'=>'Tên hạng xe đã bị trùng. Vui lòng chọn tên hạng xe khác!!'
        ];
        
    }
}
