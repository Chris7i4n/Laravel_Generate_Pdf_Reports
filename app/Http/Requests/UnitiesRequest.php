<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnitiesRequest extends FormRequest
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
            'name' => 'required',
            'cnpj' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'contracting_responsable' => 'required',
            'code_number' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [

            'name.required' => 'O nome da unidade é obrigatório',
            'cnpj.required' => 'O cnpj da unidade é obrigatório',
            'address.required' => 'O endereço da unidade é obrigatório',
            'phone.required' => 'O telefone da unidade é obrigatório',
            'contracting_responsable' => 'O contratante responsável é obrigatório'

        ];
    }
}
