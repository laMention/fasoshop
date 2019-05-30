<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image_produits extends Model
{
    protected $fillable = [
    	'produit_id', 'image'
    ];
}
