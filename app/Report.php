<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [

        'approved',
        'logoCompanyContracted',
        'logoCompanyContracting',
        'user_id',
        'type',
        'period',
        'inspection_number',
        'inspection_year',
        'data_first_revision',
        'description_first_revision',
        'first_inspector_first_revision',
        'second_inspector_first_revision',
        'elaborator_first_revision',
        'approved_for_first_revision',
        'unity_id',
        'company_id',
        'footer_logo_1',
        'footer_logo_2',
        'footer_logo_3',
        'footer_social_reason',
        'footer_address',
        'footer_phone',
        'footer_site',
        'data_second_revision',
        'description_second_revision',
        'first_inspector_second_revision',
        'second_inspector_second_revision',
        'elaborator_second_revision',
        'approved_for_second_revision',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function unity()
    {
        return $this->belongsTo(Unity::class);

    }

    public function company()
    {
        return $this->belongsTo(Company::class);

    }
}
