<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Activity extends Model implements SluggableInterface
{
	use SluggableTrait;

	protected $sluggable = [
        'build_from' => 'nombre',
        'save_to'    => 'slug',
        'unique'     => 'true',
        'on_update'  => 'true'
    ];

	protected $fillable = ['nombre', 'descripcion'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function companies()
    {
        return $this->belongsToMany('App\Company');
    }
}
