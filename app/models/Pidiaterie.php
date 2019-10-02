<?php

namespace bdd;

use Illuminate\Database\Eloquent\Model;

class Pidiaterie extends Model 
{

    protected $table = 'Pidiaterie';
    public $timestamps = true;

    public function getPoubelles()
    {
        return $this->hasMany('Poubelle');
    }

    public function getNotifs()
    {
        return $this->hasMany('Notif');
    }

}