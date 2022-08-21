<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHousingRequest extends FormRequest
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
    // 'image','location','type','amount','technical_specifications','surface_area'
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|min:3|max:255',
            'location'=>'required',
            'image'=>'required',
            'type' =>'required',
            'technical_specifications'=>'required',
            'surface_area' =>'required'
        ];
    }
}
