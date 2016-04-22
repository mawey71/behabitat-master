<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
	protected $fillable = ['nombre', 'descripcion'];

    public function companies()
    {
        return $this->belongsToMany('App\Company');
    }
}
