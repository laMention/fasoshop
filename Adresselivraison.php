<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adresselivraison extends Model
{
    protected $fillable = [
    	'user_id','user_email','nom','prenom','adresse','ville','pays','contact_principal','contact_secondaire','infos_supplementaire'
    ];
}
