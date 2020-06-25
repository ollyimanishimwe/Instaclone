<?php

namespace App\Http\Controllers;
use App\Post;
use App\user;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){

        $post = new Post;

       $post->user_id = Auth::user()->id;

       $post->caption = $request->caption;
       //This assumes that you have 'caption' as your `name` in html. '<input type="text" name="caption" />'

       $post->image = $request->image;
       //The image should be processed but this will give an output for now.

       dd(request()->all());
    //    $post->save();

       //The save ignores $fillable or any such and depends on the request and SAVES it to the model or table


        return 'worked!';
        
        dd(request()->all());
    }
}
