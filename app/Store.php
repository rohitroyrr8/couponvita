<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function coupons()
	{
	    return $this->hasMany('App\Coupon');
	}
}
