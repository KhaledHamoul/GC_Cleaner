<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Notif extends Model 
{

    protected $table = 'Notif';
    public $timestamps = true;

    public function getPoubelle()
    {
        return $this->belongsTo('Poubelle');
    }

    public function getPidiaterie()
    {
        return $this->belongsTo('Pidiaterie');
    }

}