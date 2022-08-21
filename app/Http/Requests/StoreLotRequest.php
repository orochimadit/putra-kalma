<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLotRequest extends FormRequest
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
// 'blok','surface_area','price','type','amount','housing_id'
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'blok'=>'required',
            'surface_area'=>'required',
            'type' =>'required',
            'amount'=>'required',
            'housing_id' =>'required|exists:housings,id'
        ];
    }
}
