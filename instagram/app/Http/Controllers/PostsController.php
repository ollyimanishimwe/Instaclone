<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function create(){
        return view('posts.create');
    }

    public function store(){
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required','image'],
        ]);

        
        $data['user_id'] = Auth::id();

        $post = Post::create($data);
    }
}
