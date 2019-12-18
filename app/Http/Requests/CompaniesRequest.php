<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompaniesRequest extends FormRequest
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
            'company' => 'required',
            'address' => 'required',
            'cnpj' => 'required',
            'phone' => 'required',
            'contracting_responsable' => 'required',
            'unity_id' => 'required',
            'code_number' => 'required|numeric',
        ];
    }
}
