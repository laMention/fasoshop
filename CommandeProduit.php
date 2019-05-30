<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommandeProduit extends Model
{
   protected $fillable = [
   		'order_id','user_id','produit_id','code_produit','libelle_produit','taille_produit','prix','quantite',
   ];
}
