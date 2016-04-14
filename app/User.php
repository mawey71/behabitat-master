<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'es_admin', 'nombre', 'apellido1', 'apellido2', 'es_empresa', 'razon_social', 'cif', 'direccion', 'localidad', 'provincia', 'codigo_postal', 'telefono', 'telefono_movil'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'es_admin'
    ];
}
