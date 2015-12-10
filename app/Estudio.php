<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudio extends Model
{
    //
    protected $fillable = [
    	'nombre',
    	'obs',
    ];

    public function CamposBase()
    {
    	return $this->belongsToMany('App\CampoBase', 'camposbase_estudios')->withPivot('estudio_id', 'campo_base_id');
    }
}
