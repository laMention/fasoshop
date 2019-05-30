<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alerte_mail extends Model
{
    protected $fillable = [
    	'nom','prenoms','email', 'tel', 'ville_id', 'details', 'prix_minimum', 'prix_maximum','categorie_id','type_appartement','status',

    ];

    protected $hidden = [
    	'rememberToken',
    ];
}
