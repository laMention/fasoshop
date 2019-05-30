<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
{
    protected $fillable = [
    	'username','email','nom','prenom','contact','adresse','image','email_verified_at','password','code_recup','status'
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

   public static function getAdminImage(){
        return $this->image;
    }
}

