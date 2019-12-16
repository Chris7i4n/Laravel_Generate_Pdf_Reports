<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'approved',
        'logoCompanyContracted',
        'logoCompanyContracting',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
