<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $fillable = [
    	'categorie_id','commune_id','emplacement_id','quartier_id','annonceur_id','titre','loyer','image','caution','cautiontotal','periode_location','autre_lieu','offre','description','disponibilite','nbchambre','nbbaignoire','nbterrasse','superficie_terrain','parking','note_publique','status'
    ];

    public function imageAnnonce(){
    	return $this->hasMany('App\ImageAnnonce','annonce_id');
    }
}

