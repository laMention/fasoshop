<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;
use Auth;
use App\Devise;

class Produits extends Model
{
    //
    protected $fillable = [
    	'categories_id','devise_id', 'libelle_produit', 'prix', 'code', 'couleur','marque','modele', 'description', 'image','video','caracteristiques','recommandations','Support_mis_a_jour','version','a_propos_du_vendeur', 'niveau_de_competence', 'note_importante', 'compatibilite','care','status','promotion','meilleure_vente','populaire','reduction','meta_title','meta_description','meta_keywords',
    ];

    public function attributsProduit(){
    	return $this->hasMany('App\AttributsProduits','produit_id');
    }

    public function imageProduit(){
    	return $this->hasMany('App\Image_produits','produit_id');
    }

    //Additionner la quantité de produit ajouté dans le panier
    public static function comptePanier(){
        if (Auth::check()) {
            //User connecté on utilise son email
            $user_email = Auth::user()->email;
            $comptepanier = DB::table('panier')->whereUser_email($user_email)->sum('quantite');
        }else{
            //User non connecté, on utilise sa session
            $session_id = Session::get('session_id');
            $comptepanier = DB::table('panier')->whereSession_id($session_id)->sum('quantite');
        }
        return $comptepanier;
    }

    //Recupère le taux de change et la dévise
    public static function getCurrencyDevise($prix){
        $getDevise = Devise::whereStatus(1)->get();
        //$prix = Produits::select('prix')->whereStatus(1);
        foreach ($getDevise as $devises) {
            if ($devises->code_devise =="USD") {
                $USD_rate = round($prix/$devises->taux_change,2);
            }else if ($devises->code_devise =="GHS") {
                $GHS_rate = round($prix/$devises->taux_change,2);
            }else if ($devises->code_devise =="NGN") {
                $NGN_rate = round($prix/$devises->taux_change,2);
            }else if ($devises->code_devise =="GNF") {
                $GNF_rate = round($prix/$devises->taux_change,2);
            }else if ($devises->code_devise =="XOF") {
                $FCFA_rate = round($prix/$devises->taux_change,2);
            }else if ($devises->code_devise =="LRD") {
                $LRD_rate = round($prix/$devises->taux_change,2);
            }else if ($devises->code_devise =="GBP") {
                $GPB_rate = round($prix/$devises->taux_change,2);
            }else if ($devises->code_devise =="EURO") {
                $EURO_rate = round($prix/$devises->taux_change,2);
            }
            
        }
        $deviseArr = array('USD_rate' => $USD_rate, 'GHS_rate'=>$GHS_rate, 'NGN_rate'=>$NGN_rate, 'GNF_rate'=>$GNF_rate, 'FCFA_rate'=>$FCFA_rate, 'LRD_rate'=>$LRD_rate, 'GPB_rate'=>$GPB_rate, 'EURO_rate'=>$EURO_rate);

        return $deviseArr;
    }
}


