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
            'equipment_id' => 'required',
            'description_of_conclusion' => 'required',
            'legend_of_conclusion' => 'required',
            'image_of_conclusion' => 'required|file' ,
            'description_of_elements' => 'required',
            'trigger_id' => 'required',
            'conclusion_of_trigger' => 'required',
            'conclusion_image_1' => 'required|file',
            'conclusion_image_2' => 'required|file',
            'conclusion_legend' => 'required',
            'description_of_elements_sinalization' => 'required',
            'sinalization_id' => 'required',
            'conclusion_of_sinalization' => 'required',
            'conclusion_image_1_sinalization' => 'required|file',
            'conclusion_image_2_sinalization' => 'required|file',
            'conclusion_legend_sinalization' => 'required',
            'description_of_elements_lighting' => 'required',
            'lighting_id' => 'required',
            'conclusion_of_lighting' => 'required',
            'conclusion_image_1_lighting' => 'required|file',
            'conclusion_image_2_lighting' => 'required|file',
            'conclusion_legend_lighting' => 'required',
            'description_of_elements_bomb' => 'required',
            'bomb_id' => 'required',
            'conclusion_of_bomb' => 'required',
            'conclusion_image_1_bomb' => 'required|file',
            'conclusion_image_2_bomb' => 'required|file',
            'conclusion_legend_bomb' => 'required',
            'recomendation_id' => 'required'

        ];
    }
}
