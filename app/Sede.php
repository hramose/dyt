<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    //Campos completables
    protected $fillable = [
    			'nombre',
    			'telefonos',
    		];
}
