<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    //
    protected $fillable = [
    	'periode_abonnement', 'prix','status',
    ];

    protected $hidden = [
    	'rememberToken',
    ];
}
