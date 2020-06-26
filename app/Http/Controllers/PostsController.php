<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function __construct()
    {
        $this ->middleware('auth');
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required','image'],
        ]);

        

        $imagePath = request('image')->store('uploads', 'public');

        $post = Post::create([
            'caption' => $data['caption'],
            'image' => $imagePath,
            'user_id' => Auth::id()
        ]);

        return redirect('/profile/' .auth()->user()->id);
    }
}
