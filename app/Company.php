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
        'tecnical_reponsable',
        'contracting_responsable',
        'code_number',
        'user_id'
    ];

    public function unity(){
        return $this->belongsToMany(Unity::class);
    }
}
