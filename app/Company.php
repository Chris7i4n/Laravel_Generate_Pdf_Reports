<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [

        'logo',
        'company',
        'address',
        'cnpj',
        'phone',
        'tecnical_responsable',
        'user_id',
        'footer_logo_1',
        'footer_logo_2',
        'footer_logo_3',
        'footer_logo_4',
        'footer_social_reason',
        'footer_site',

    ];

    public function unity(){
        return $this->belongsToMany(Unity::class);
    }

    public function report(){
        return $this->belongsToMany(Report::class);
    }
}
