<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportRequest extends FormRequest
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
            'logoContractedCompany' => 'required|file',
            'logoContractingCompany' => 'required|file',
            'type' => 'required',
            'period' => 'required',
            'inspection_number' => 'required',
            'inspection_year' => 'required',


        ];
    }
}
