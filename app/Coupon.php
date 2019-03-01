<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Coupon extends Model
{
    public function getStore()
	{
	    return $this->belongsTo('App\Store', 'store', 'id');
	}
}
