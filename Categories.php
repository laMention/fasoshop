<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected $fillable = [
    	'parent_id', 'libelle', 'description', 'url',  'status',

    ];

    protected $hidden = [

    	'rememberToken',
    ];

    public function categoriesApp(){
    	return $this->hasMany('App\Categories','parent_id');
    }
}
