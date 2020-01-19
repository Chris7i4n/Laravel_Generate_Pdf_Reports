<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recomendation extends Model
{
    protected $fillable = [

        'description',
        'responsable',
        'date',

    ];

    public function report(){
        return $this->belongsToMany(Report::class);
    }
}
