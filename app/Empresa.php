<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [

        'logo',
        'company',
        'address',
        'cnpj',
        'phone',
        'tecnical_reponsable',
        'contracting_responsable'
    ];


}
