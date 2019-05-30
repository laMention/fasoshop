<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageAnnonce extends Model
{
    protected $fillable = [
    	'annonce_id', 'image','options'
    ];
}
