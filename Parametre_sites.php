<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametre_sites extends Model
{
    //
    protected $fillable = [
    	'site_name', 'logo', 'icon', 'mots_cles', 'description',
    ];


    protected $hidden = [
    	'RememberToken',
    ];
}



