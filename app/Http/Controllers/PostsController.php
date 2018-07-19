<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()
            ->orderBy('created_at', 'desc')
            ->get();
        return view('posts.index')->with('posts', $posts);
    }

    public function show($slug)
    {
        $post = Post::whereTranslation('slug', $slug)
            ->firstOrFail();

        if ( $post->translate()->where('slug', $slug)->first()->locale != app()->getLocale() ) {
            return redirect()->route('posts.show', $post->translate()->slug);
        }
        return view('posts.show')->with('post', $post);
    }
}
