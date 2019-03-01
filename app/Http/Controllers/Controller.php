<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;
use App\Coupon;
use App\Store;
use App\Subscription;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
    	$categories = Category::limit(5)->get();
    	$stores = Store::inRandomOrder()->limit(20)->get();
    	$coupons = Coupon::where('status', '1')->with('getStore')->limit(8)->get();
    	$posts = Post::where('status', 'PUBLISHED')->inRandomOrder()->limit(3)->get();
    	
    	return view('welcome')->with('posts', $posts)->with('coupons', $coupons)->with('categories', $categories)->with('stores', $stores);
    }

    public function addSubscription(Request $request) {
       
        $user = new Subscription();
        $user->email = $request->input('email');
        $user->save();

        return redirect()->back()->with('success', 'Your subscription added successfully.');
    }
}
