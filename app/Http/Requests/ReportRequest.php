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
            'description_of_elements' => 'required'

        ];
    }
}
