<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;
use App\Deal;
use App\Store;

class DealController extends Controller
{
    public function index()
    {
        $deals = Deal::where('status', '1')->paginate(12);
        $stores = Store::inRandomOrder()->limit(5)->get();
        $recents = Post::where('status', 'PUBLISHED')->inRandomOrder()->limit(5)->get();
        $categories = Category::all();
        return view('deals.index')->with('deals', $deals)->with('stores', $stores)->with('recents', $recents)->with('categories', $categories);
    }

    public function show($slug)
    {
        $deal = Deal::where('slug', $slug)->get();
        $store = Store::find($deal[0]->store_id);
        
        return view('deals.details')->with('deal', $deal)->with('store', $store);
    }
}
