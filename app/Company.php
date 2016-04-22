<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	protected $fillable = ['razon_social', 'cif', 'direccion', 'localidad', 'provincia', 'codigo_postal', 'telefono', 'telefono_movil'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function activities()
    {
        return $this->belongsToMany('App\Company');
    }
}
