<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Post;
use App\Employee;
use App\Partner;

class PagesController extends Controller
{
    public function index()
    {
        $posts = Post::latest()
            ->orderBy('created_at', 'desc')
            ->limit(2)
            ->get();

        $employees = Employee::all();

        $partners = Partner::all();

        return view('pages.index')
            ->with('posts', $posts)
            ->with('employees', $employees)
            ->with('partners', $partners);
    }

    public function show($slug)
    {
        $page = Page::whereTranslation('slug', $slug)->firstOrFail();

        if ( $page->translate()->where('slug', $slug)->first()->locale != app()->getLocale() ) {
            return redirect()->route('pages.show', $page->translate()->slug);
        }

        return view('pages.show')->with('page', $page);
    }
}
