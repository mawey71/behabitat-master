<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
	protected $fillable = ['nombre', 'descripcion'];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
