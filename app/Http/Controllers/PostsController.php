<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()
            ->orderBy('created_at', 'desc');

        if ($month = request('month')) {
            $posts->whereMonth('created_at', $month);
        }
        if ($year = request('year')) {
            $posts->whereYear('created_at', $year);
        }

        $posts = $posts->paginate(5);

        $archives = Post::selectRaw('year(created_at) year, month(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
        
        $pinned_posts = Post::latest()
            ->where('pinned', true)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('posts.index', compact('posts', 'pinned_posts', 'archives'));
    }

    public function show($slug)
    {
        $post = Post::whereTranslation('slug', $slug)
            ->firstOrFail();
        
        $pinned_posts = Post::latest()
            ->where('pinned', true)
            ->orderBy('created_at', 'desc')
            ->get();

        if ( $post->translate()->where('slug', $slug)->first()->locale != app()->getLocale() ) {
            return redirect()->route('news.show', $post->translate()->slug);
        }
        return view('posts.show')
            ->with('post', $post)
            ->with('pinned_posts', $pinned_posts);
    }
}
