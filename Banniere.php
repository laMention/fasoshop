<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banniere extends Model
{
    protected $fillable = [
    	'image', 'titre','description','link','status'
    ];
}

 