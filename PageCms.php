<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageCms extends Model
{
    protected $fillable = [
    	'titre','description','url','status','footer_service','footer_politique','footer_apropos','meta_title','meta_description','meta_keywords',
    ];
}
