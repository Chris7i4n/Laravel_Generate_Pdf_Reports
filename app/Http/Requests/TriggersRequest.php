<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TriggersRequest extends FormRequest
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
            'initials' => 'required',
            'localization' => 'required',
            'question_01' => 'required',
            'question_02' => 'required',
            'question_03' => 'required',
            'question_04' => 'required',
            'question_05' => 'required',
            'question_06' => 'required',
            'question_07' => 'required',
            'question_08' => 'required',
            'question_09' => 'required',
            'question_10' => 'required',
            'note' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O nome do acionador é obrigatório',
            'initials.required' => 'A sigla é obrigatória',
            'localization.required' => 'A localização é obrigatória',
            'question_01.required' => 'A pergunta 1 é obrigatória',
            'question_02.required' => 'A pergunta 2 é obrigatória',
            'question_03.required' => 'A pergunta 3 é obrigatória',
            'question_04.required' => 'A pergunta 4 é obrigatória',
            'question_05.required' => 'A pergunta 5 é obrigatória',
            'question_06.required' => 'A pergunta 6 é obrigatória',
            'question_07.required' => 'A pergunta 7 é obrigatória',
            'question_08.required' => 'A pergunta 8 é obrigatória',
            'question_09.required' => 'A pergunta 9 é obrigatória',
            'question_10.required' => 'A pergunta 10 é obrigatória',
            'note.required' => 'A observação é obrigatória',
        ];
    }
}
