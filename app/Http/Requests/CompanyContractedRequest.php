<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyContractedRequest extends FormRequest
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
            'tecnical_reponsable' => 'required',
        ];
    }

    public function messages()
    {
        return [
                'logoContractedCompany.required' => 'A logo da empresa contratada é obrigatória',
                'logoContractedCompany.file' => 'A logo da empresa contratada precisa ser uma imagem',
                'company.required' => 'O nome da empresa contratada é obrigatório',
                'address.required' => 'O endereço da empresa contratada',
                'cnpj.required' => 'O cnpj da empresa contratada é obrigatório',
                'phone.required' => 'O telefone da empresa contratada é obrigatório',
                'tecnical_reponsable.required' => 'O responsável técnico é um campo obrigatório',
        ];
    }
}
