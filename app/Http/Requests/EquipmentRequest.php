<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipmentRequest extends FormRequest
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
            'tag' => 'required',
            'condition' => 'required',
            'localization' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'tag.required' =>  'A tag do equipamento é obrigatória',
            'condition.required' => 'A condição do equipamento é obrigatória',
            'localization.required' => 'A localização do equipamento é obrigatória',
        ];
    }
}
