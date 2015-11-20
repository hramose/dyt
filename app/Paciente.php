<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //Campos completables
    protected $fillable = [
    			'nombre',
    			'apellido',
    			'telefono',
    			'direccion',
    			'sexo',
    			'email',
    			'origen'
    		];

    public function users()
    {
    	return $this->belongsToMany('App\User');
    }

    public function paciente()
    {
        return $this->hasOne('App\Item_hc');
    }

     public function saveMedico($user)
    {
        if(!empty($user))
        {
            $this->users()->sync($user);
        } else {
            $this->users()->detach();
        }
    }
}
