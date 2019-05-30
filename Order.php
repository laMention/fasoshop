<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    	'user_id','user_email','nom','prenom','adresse','ville','pays','prefixe','contact_principal','contact_secondaire','code_coupon','adresse_livraison','methode_paiement','montant_reduction','frais_livraison','montant_total_ht','tva','montant_total_ttc','status',
    ];

    //Contraintes d'intégrité
    public function commandes(){
    	return $this->hasMany('App\CommandeProduit','order_id');
    }

    //Recuperer les détails de la commande
    public static function getDetailsCommande($order_id){
    	$getDetailsCommande = Order::whereId($order_id)->first();
    	return $getDetailsCommande;
    }

    //Recuperer le code pays
    public static function getCodePays($country){
    	$getCodePays = Country::where('country_name',$country)->first();
    	return $getCodePays;
    }
}
