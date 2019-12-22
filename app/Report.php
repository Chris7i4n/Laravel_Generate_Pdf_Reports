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
        'company_id'
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
