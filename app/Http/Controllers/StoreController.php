<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use App\Coupon;
use App\Store;

class StoreController extends Controller {
	public function index() {
		$stores = Store::orderBy('id', 'DESC')->paginate(12);
		return view('store.index')->with('stores', $stores);
	}

	public function show($slug) {
		$store = Store::where('slug', $slug)->get();
		$coupons = Coupon::where('store', $store[0]->id)->paginate(12);
		
		$deals = Coupon::where('store', 32233)->get();
		return view('store.show')->with('store', $store)
								 ->with('coupons', $coupons)
								 ->with('deals', $deals);
	}
}