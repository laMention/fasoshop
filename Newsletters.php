<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletters extends Model
{
    protected $fillable = [
    	'email', 'status',
    ];

    protected $hidden = [
    	'rememberToken',
    ];
}
