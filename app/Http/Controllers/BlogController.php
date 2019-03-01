<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;
use App\Store;

class BlogController extends Controller
{
    public function index()
    {
        //1. blog posts
        //2. recent posts
        //3. Categories
        //3. trending stores

    	$posts = Post::where('status', 'PUBLISHED')->orderBy('id', 'DESC')->paginate(10);
        
        $recents = Post::where('status', 'PUBLISHED')->inRandomOrder()->limit(5)->get();
        $categories = Category::all();
    	$stores = Store::inRandomOrder()->limit(5)->get();
    	
    	
        
    	return view('blog.index')->with('posts', $posts)->with('recents', $recents)->with('categories', $categories)->with('stores', $stores);
    }

    public function show($slug)
    {
    	//1. blog posts
    	//2. recent posts
    	//3. Categories
    	//3. trending stores
    	//5. next and prev
        $post = Post::where('slug', $slug)->get();
        
        $recents = Post::where('status', 'PUBLISHED')->inRandomOrder()->limit(5)->get();
        $categories = Category::all();
        $stores = Store::inRandomOrder()->limit(5)->get();

    	return view('blog.details')->with('post', $post)->with('recents', $recents)->with('categories', $categories)->with('stores', $stores);
    }

    public function search(Request $request)
    {
        $posts = Post::where([
            ['body','LIKE',"%{$request->input('query')}%"],
            ['status', 'PUBLISHED'],
        ])->orderBy('id', 'DESC')->paginate(10);
        $recents = Post::where('status', 'PUBLISHED')->inRandomOrder()->limit(5)->get();
        $categories = Category::all();
        $stores = Store::inRandomOrder()->limit(5)->get();
        
        return view('blog.index')->with('posts', $posts)->with('recents', $recents)->with('categories', $categories)->with('stores', $stores);
    }

    public function searchByCategory($slug)
    {   
        $category = Category::where('slug', $slug)->get();
        
        $cat_id = $category[0]->id;

        $posts = Post::where([
            'category_id'=> $cat_id,
            'status' => 'PUBLISHED'
        ])->orderBy('id', 'DESC')->paginate(8);
        
        $recents = Post::where('status', 'PUBLISHED')->inRandomOrder()->limit(5)->get();
        $categories = Category::all();
        $stores = Store::inRandomOrder()->limit(5)->get();
        
        return view('blog.index')->with('posts', $posts)->with('recents', $recents)->with('categories', $categories)->with('stores', $stores);
    }

}
