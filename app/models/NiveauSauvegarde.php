<?php

namespace bdd;

use Illuminate\Database\Eloquent\Model;

class NiveauSauvegarde extends Model 
{

    protected $table = 'NiveauSauvegarde';
    public $timestamps = true;

    public function getPoubelle()
    {
        return $this->belongsTo('Poubelle');
    }

}