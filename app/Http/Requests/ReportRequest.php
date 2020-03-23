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
            'type' => 'required',
            'period' => 'required',
            'inspection_number' => 'required',
            'inspection_year' => 'required',
            'data_first_revision' => 'required',
            'description_first_revision' => 'required',
            'first_inspector_first_revision' => 'required',
            'second_inspector_first_revision' => 'required',
            'elaborator_first_revision' => 'required',
            'approved_for_first_revision' => 'required',
            'company_id' => 'required',
            'data_goals' => 'required',
            'article_goals' => 'required',
            'reviewed_for' => 'required',
            'reviewed_for_function' => 'required',
            'first_inspector_function_first_revision' => 'required',
            'second_inspector_function_first_revision' => 'required',
            'elaborator_function_first_revision' => 'required',
            'approved_for_function_first_revision' => 'required',
            'description_of_system' => 'required',
            'description_of_conclusion' => 'required',
            'legend_of_conclusion' => 'required',
            'image_of_conclusion' => 'required|file' ,
            'description_of_elements' => 'required',
            'conclusion_of_trigger' => 'required',
            'conclusion_image_1' => 'required|file',
            'conclusion_image_2' => 'required|file',
            'conclusion_legend' => 'required',
            'description_of_elements_sinalization' => 'required',
            'conclusion_of_sinalization' => 'required',
            'conclusion_image_1_sinalization' => 'required|file',
            'conclusion_image_2_sinalization' => 'required|file',
            'conclusion_legend_sinalization' => 'required',
            'description_of_elements_lighting' => 'required',
            'conclusion_of_lighting' => 'required',
            'conclusion_image_1_lighting' => 'required|file',
            'conclusion_image_2_lighting' => 'required|file',
            'conclusion_legend_lighting' => 'required',
            'description_of_elements_bomb' => 'required',
            'conclusion_of_bomb' => 'required',
            'conclusion_image_1_bomb' => 'required|file',
            'conclusion_image_2_bomb' => 'required|file',
            'conclusion_legend_bomb' => 'required',
            'recomendation_id' => 'required'

        ];
        
    }
    public function messages()
    {
        return [
            'type.required' => 'Tipo é obrigatória',
            'period.required' => 'Período é obrigatória',
            'inspection_number.required' => 'Numero inspeção é obrigatória',
            'inspection_year.required' => 'Ano da insperação é obrigatória',
            'data_first_revision.required' => 'Data primeira revisão é obrigatória',
            'description_first_revision.required' => 'Descrição primeira revisão é obrigatória',
            'first_inspector_first_revision.required' => 'Primeiro descrição primeiro inspetor é obrigatória',
            'second_inspector_first_revision.required' => 'Primeira descrição segundo inspertor é obrigatória',
            'elaborator_first_revision.required' => 'Rvisão primeiro elaborador',
            'approved_for_first_revision.required' => 'Aprovado primeira revisão é obrigatória',
            'company_id.required' => 'company id',
            'data_goals.required' => 'required',
            'article_goals.required' => 'required',
            'reviewed_for.required' => 'required',
            'reviewed_for_function.required' => 'required',
            'first_inspector_function_first_revision.required' => 'required',
            'second_inspector_function_first_revision.required' => 'required',
            'elaborator_function_first_revision.required' => 'required',
            'approved_for_function_first_revision.required' => 'required',
            'description_of_system.required' => 'required',
            'description_of_conclusion.required' => 'required',
            'legend_of_conclusion.required' => 'required',
            'image_of_conclusion.required' => 'required|file' ,
            'description_of_elements.required' => 'required',
            'conclusion_of_trigger.required' => 'required',
            'conclusion_image_1.required' => 'required|file',
            'conclusion_image_2.required' => 'required|file',
            'conclusion_legend.required' => 'required',
            'description_of_elements_sinalization.required' => 'required',
            'conclusion_of_sinalization.required' => 'required',
            'conclusion_image_1_sinalization.required' => 'required|file',
            'conclusion_image_2_sinalization.required' => 'required|file',
            'conclusion_legend_sinalization.required' => 'required',
            'description_of_elements_lighting.required' => 'required',
            'conclusion_of_lighting.required' => 'required',
            'conclusion_image_1_lighting.required' => 'required|file',
            'conclusion_image_2_lighting.required' => 'required|file',
            'conclusion_legend_lighting.required' => 'required',
            'description_of_elements_bomb.required' => 'required',
            'conclusion_of_bomb.required' => 'required',
            'conclusion_image_1_bomb.required' => 'required|file',
            'conclusion_image_2_bomb.required' => 'required|file',
            'conclusion_legend_bomb.required' => 'required',
            'recomendation_id.requiredv' => 'required'
        ];
    }
}
