<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = [
    	'code_coupon','montant','type_montant', 'date_expiration','status'
    ];
}
