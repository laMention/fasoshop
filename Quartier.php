<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quartier extends Model
{
    //
    protected $fillable = [
    	'quartier', 'status', 
    ];

    protected $hidden = [
		'rememberToken',
    ];
}
