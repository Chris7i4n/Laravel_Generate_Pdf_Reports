<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $fillable = [

        'tag',
        'localization',
        'condition'

    ];

    public function report(){
        return $this->belongsToMany(Report::class);
    }

}
