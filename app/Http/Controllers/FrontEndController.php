<?php

namespace App\Http\Controllers;

use App\Setting;

use App\Category;

use App\Tag;

use App\Post;

use App\User;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    
    
    public function index(){
        
        return view('index')->with('title', Setting::first()->site_name)
            ->with('categories', Category::take(5)->get())
          ->with('latest_post', Post::orderby('created_at', 'desc')->first())
            ->with('second_post', Post::orderby('created_at', 'desc')->skip(1)->take(1)->get())
            ->with('third_post', Post::orderby('created_at', 'desc')->skip(2)->take(1)->get())
            ->with('categories', Category::orderby('created_at', 'desc')->take(3)->get())
            ->with('settings', Setting::first());
    }
    
    
    
    
    public function single($slug){
        
        
        
        $post = Post::where('slug', $slug)->first();
        
        
        
        
        
        
        $next_id = Post::where('id', '>', $post->id)->min('id');
            
    
        
        
        
        $prev_id = Post::where('id', '<', $post->id)->max('id');
            
        

        
        
        return view ('single')->with('post', $post)
            ->with('categories', Category::take(5)->get())
            ->with('settings', Setting::first())
            ->with('title', Setting::first()->site_name)
            ->with('next', Post::find($next_id))
            ->with('prev', Post::find($prev_id))
            ->with('tags', Tag::all());
    }
    
    
    
    
    public function category($id){
        
        
        $category = Category::find($id);
        
        return view('category')->with('category', $category)
            ->with('title', $category->name)
            ->with('categories', Category::take(5)->get())
            ->with('settings', Setting::first());
                
    }

    
}