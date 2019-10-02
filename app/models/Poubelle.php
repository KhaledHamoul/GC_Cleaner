<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Poubelle extends Model 
{

    protected $table = 'Poubelle';
    public $timestamps = true;

    public function getPidiaterie()
    {
        return $this->belongsTo('Pidiaterie');
    }

    public function getNiveauxSaved()
    {
        return $this->hasMany('Poubelle');
    }

}