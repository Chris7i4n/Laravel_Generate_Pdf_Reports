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
            'company_id.required' => 'Compania é obrigatória',
            'data_goals.required' => 'Meta de data é obrigatória',
            'article_goals.required' => 'Data do artigo é obrigatório',
            'reviewed_for.required' => 'Revisão é obrigatória',
            'reviewed_for_function.required' => 'Revisado por funcionário é obrigatória',
            'first_inspector_function_first_revision.required' => 'Inspeção primeiro funcionário é obrigatória',
            'second_inspector_function_first_revision.required' => 'Segunda insperação primeirio funcinário é obrigatória',
            'elaborator_function_first_revision.required' => 'elaborador é obrigatória',
            'approved_for_function_first_revision.required' => 'aprovado pelo primeiro funcionário revisão é obrigatória',
            'description_of_system.required' => 'Descrição é obrigatória',
            'description_of_conclusion.required' => 'Descrição de conclusão é obrigatória',
            'legend_of_conclusion.required' => 'Legenda de conclusão é obrigatória',
            'image_of_conclusion.required' => 'Imagem de conclusão é obrigatória' ,
            'description_of_elements.required' => 'Descrição de elementos é obrigatória',
            'conclusion_of_trigger.required' => 'Descrição de acionadores é obrigatória',
            'conclusion_image_1.required' => 'Imagem 1 acionadores é obrigatória',
            'conclusion_image_2.required' => 'Imagem 2 acionadores é obrigatória',
            'conclusion_legend.required' => 'Conclusão acionadores é obrigatória',
            'description_of_elements_sinalization.required' => 'descrição elementos de sinalização é obrigatória',
            'conclusion_of_sinalization.required' => 'Conclusão sinalização é obrigatória',
            'conclusion_image_1_sinalization.required' => 'Imagem 1 sinalizações é obrigatória',
            'conclusion_image_2_sinalization.required' => 'Imagem 2 sinalizações é obrigatória',
            'conclusion_legend_sinalization.required' => 'Legenda sinalizações é obrigatória',
            'description_of_elements_lighting.required' => 'Descrição elementos de iluminação é obrigatória',
            'conclusion_of_lighting.required' => 'Conclusão linghting é obrigatória',
            'conclusion_image_1_lighting.required' => 'Imagem 1 iluminações é obrigatória',
            'conclusion_image_2_lighting.required' => 'Imagem 2 iluminações é obrigatória',
            'conclusion_legend_lighting.required' => 'Legenda iluminações é obrigatória',
            'description_of_elements_bomb.required' => 'Descrição elementos de bombas é obrigatória',
            'conclusion_of_bomb.required' => 'Conclusão bomba é obrigatória',
            'conclusion_image_1_bomb.required' => 'Imagem 1 bombas é obrigatórias',
            'conclusion_image_2_bomb.required' => 'Imagem 2 bomba é obrigatória',
            'conclusion_legend_bomb.required' => 'Legendas bombas é obrigatória',
            'recomendation_id.required' => 'Recomendações são obrigatória'
        ];
    }
}
