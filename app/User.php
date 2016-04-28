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
        'username', 'email', 'password'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'es_admin'
    ];

    public function particular() {
        return $this->hasOne('App\Particular');
    }

    public function company() {
        return $this->hasOne('App\Company');
    }
    // public function activities()
    // {
    //     return $this->belongsToMany('App\Activity');
    // }

    public function isAdmin() {
        return $this->es_admin;
    }
}
