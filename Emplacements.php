<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emplacements extends Model
{
    protected $fillable = [
    	'lieu', 'parent_id', 'status',
    ];

    protected $hidden = [
    	'rememberToken',
    ];
}
