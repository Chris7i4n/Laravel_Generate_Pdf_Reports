<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecomendationsRequest extends FormRequest
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
            'description' => 'required',
            'date' => 'required',
            'responsable' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'A descrição é obrigatória',
            'date.required' => 'A data é obrigatória',
            'responsable.required' => 'O responsável é obrigatório'
        ];
    }
}
