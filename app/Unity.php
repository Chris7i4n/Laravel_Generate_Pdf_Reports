<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unity extends Model
{
    protected $fillable = [

        'name',
        'address',
        'cnpj',
        'phone',
        'contracting_responsable',
        'code_number'

    ];

    public function company(){
        return $this->belongsToMany(Company::class);
    }
    public function hydrant(){
        return $this->belongsToMany(Hydrant::class);
    }
    public function bomb(){
        return $this->belongsToMany(Bomb::class);
    }
    public function sinalization(){
        return $this->belongsToMany(Sinalization::class);
    }
    public function trigger(){
        return $this->belongsToMany(Trigger::class);
    }
    public function lighting(){
        return $this->belongsToMany(Lighting::class);
    }
    public function equipment(){
        return $this->belongsToMany(Equipment::class);
    }
}
