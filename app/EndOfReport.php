<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EndOfReport extends Model
{
    protected $fillable = [

        'end_of_report_description',
        'end_of_report_pages',
        'end_of_report_localization',
        'end_of_report_signature',
        'end_of_report_employee_name',
        'end_of_report_employee_function_1',
        'end_of_report_employee_function_2',
        'end_of_report_employee_crea',
        'report_id'

    ];
    public $timestamps = false;

    public function report(){
        return $this->belongsTo(Report::class);
    }
}
