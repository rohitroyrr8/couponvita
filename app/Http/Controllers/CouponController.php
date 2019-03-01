<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use App\Coupon;
use App\Store;

class CouponController extends Controller
{
	public function index()
	{
		 //$coupons = Coupon::where('status', '1');
		//$coupons = Coupon::where('status', '1')->orderBy('id', 'DESC')->with('store')->paginate(8);

		//$coupons = Coupon::find(1)->with('store')->get();
		$coupons = Coupon::where('status', '1')->with('getStore')->paginate(12);
		
		// foreach ($coupons as $coupon) {
		// 	print_r($coupon->getStore);
		// }
		// return;
		return view('coupons.index')->with('coupons', $coupons);
	}

	
}