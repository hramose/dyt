<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadMedida extends Model
{
    //
    protected $fillable = [
    			'unidad',
    			];

    public function camposBase()
    {
    	return $this->belongsToMany('App\CampoBase', 'campos_base_unidad_medidas')->withPivot('campos_base_id', 'unidad_medidas_id');
    }
}
