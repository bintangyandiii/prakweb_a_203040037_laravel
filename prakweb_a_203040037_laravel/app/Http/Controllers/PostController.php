<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'All post',
            'active' => 'blog',
            // "posts" => Post::all()
            'posts'=> post::latest()->get()
        ]); 
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Single Post',
            'active' => 'blog',
            'post' => $post
        ]);
    }
}
 