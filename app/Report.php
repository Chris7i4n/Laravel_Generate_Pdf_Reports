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
        'unity_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function unity()
    {
        return $this->belongsTo(Unity::class);

    }
}
