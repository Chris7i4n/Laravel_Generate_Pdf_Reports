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
            'hydrant_id' => 'required',
            'trigger_id' => 'required',
            'sinalization_id' => 'required',
            'equipment_id' => 'required',
            'bomb_id' => 'required',
            'lighting_id' => 'required'
        ];
    }

    public function messages()
    {
        return [

            'name.required' => 'O nome da unidade é obrigatório',
            'cnpj.required' => 'O cnpj da unidade é obrigatório',
            'address.required' => 'O endereço da unidade é obrigatório',
            'phone.required' => 'O telefone da unidade é obrigatório',
            'contracting_responsable' => 'O contratante responsável é obrigatório',
            'hydrant_id.required' => 'O campo de Hidrantes é obrigatório',
            'trigger_id.required' => 'O campo de Acionadores é obrigatório',
            'sinalization_id.required' => 'O campo de Sinalizações é obrigatório',
            'equipment_id.required' => 'O campo de Equipamentos é obrigatório',
            'bomb_id.required' => 'O campo de Bombas é obrigatório',
            'lighting_id.required' => 'O campo de Iluminações é obrigatório'
        ];
    }
}
