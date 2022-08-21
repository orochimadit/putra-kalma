<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKprRequest extends FormRequest
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
// 'loan_amount','range_time','bank_interest','installment','bank_id'
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'loan_amount'   =>'required',
            'range_time'    =>'required',
            'bank_interest' => 'required',
            'installment'   => 'required',
            'bank_id'       => 'required|exists:banks,id'
        ];
    }
}
