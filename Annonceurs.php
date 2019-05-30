<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonceurs extends Model
{
    protected $fillable = [
    	'nom_annonceur','societe', 'description', 'tel', 'mobile','site_web','twitter','facebook','image','login','password','email','status',

    ];

    protected $hidden = [
    	'rememberToken',
    ];
}
