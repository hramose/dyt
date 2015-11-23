<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampoBase extends Model
{
 	protected $table = 'campos_base';

    //Campos completables
    protected $fillable = [
    			'nombre',
    			'descripcion',
    			'tipo',
    			'ref_min',
    			'ref_max',
    		];

    public function UnidadesMedidas()
    {
    	return $this->belongsToMany('App\UnidadMedida', 'campos_base_unidad_medidas')->withPivot('campos_base_id', 'unidad_medidas_id');
    }

    public function saveUnidadMedida($unidadMedida)
    {
        if(!empty($unidadMedida))
        {
            $this->UnidadesMedidas()->sync($unidadMedida);
        } else {
            $this->UnidadesMedidas()->detach();
        }
    }
}
