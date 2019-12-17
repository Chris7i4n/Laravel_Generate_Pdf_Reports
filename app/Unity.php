<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unity extends Model
{
    protected $fillable = [

        'name',

    ];

    public function company(){
        return $this->belongsToMany(Company::class);
    }
}
