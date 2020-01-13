<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lighting extends Model
{
    protected $fillable = [

        'name',
        'initials',
        'localization',
        'question_01',
        'question_02',
        'question_03',
        'question_04',
        'question_05',
        'question_06',
        'question_07',
        'question_08',
        'question_09',
        'question_10',
        'note'

    ];

    public function report(){
        return $this->belongsToMany(Report::class);
    }
}
