<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FonctionnalitesAppartements extends Model
{
    protected $fillable = [
    	'appartement_id','nb_Chambre','nb_baignoires','nb_terrasse','parking','nb_appart_identique','plus_infos','meuble',
    ];

    
}
