<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Particular extends Model
{
	protected $fillable = ['nombre', 'apellido1', 'apellido2', 'nif', 'direccion', 'localidad', 'provincia', 'codigo_postal', 'telefono', 'telefono_movil'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
