<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributsProduits extends Model
{
    //
    protected $fillable  = [
    	'produit_id', 'sku', 'taille', 'prix', 'stock', 'type', 'annee', 'modèle', 'marque',
    ];
}

