<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
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
