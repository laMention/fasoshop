<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devise extends Model
{
    protected $fillable = [
    	'code_devise','libelle_devise','taux_change','status',
    ];

    public function produitsDevise(){
    	return $this->hasMany('App\produits','devise_id');
    }
}
