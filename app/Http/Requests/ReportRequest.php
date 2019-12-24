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
            'logo_footer_1' => 'required',
            'logo_footer_2' => 'required',
            'logo_footer_3' => 'required',
            'footer_social_reason' => 'required',
            'footer_address' => 'required',
            'footer_phone' => 'required',
            'footer_site' => 'required',

        ];
    }
}
