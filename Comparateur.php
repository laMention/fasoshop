<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comparateur extends Model
{
    protected $fillable = [
    	'produit_id','libelle_produit','code_produit','couleur','taille','prix','quantite','version','user_email','session_id',
    ];

    public function produit(){
    	return $this->hasMany('App\Produits','id');
    }
}
 