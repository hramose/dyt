<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item_hc extends Model
{
    protected $fillable = ['id_sede', 'id_usuario', 'id_paciente','titulo', 'descripcion', 'tipo'];
    
    public function paciente()
    {
        return $this->hasOne('App\Paciente');
    }
}
