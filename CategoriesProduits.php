<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriesProduits extends Model
{
    protected $fillable = [
    	'parent_id', 'libelle', 'description', 'url',  'status','meta_title','meta_description','meta_keywords',

    ];

    protected $hidden = [

    	'rememberToken',
    ];

    public function categories(){
    	return $this->hasMany('App\CategoriesProduits','parent_id');
    }
    public function produits(){
    	return $this->hasMany('App\produits','categories_id');
    }
}
