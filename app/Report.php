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
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
