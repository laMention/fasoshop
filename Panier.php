<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    protected $fillable = [
    	'produit_id','libelle_produit','code_produit','taille','prix','quantite','version','user_email','session_id','couleur'
    ];

    
}
