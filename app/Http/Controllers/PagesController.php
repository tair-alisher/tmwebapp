<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Repositories\PostsRepo;
use App\Repositories\PagesRepo;
use App\Page;
use App\Post;
use App\Employee;
use App\Partner;
use Validator;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except([
            'index', 'show'
        ]);
    }

    public function index(PostsRepo $repo)
    {        
        $posts = $repo->getTwoLast(app()->getLocale());

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

        return view('pages.show')
            ->with('page', $page);
    }

    /* ********** admin pages ********** */

    public function editForm(PagesRepo $repo, $slug)
    {
        $page = $repo->getTranslationBySlug($slug);

        $slug_ru = $repo->getSlugByLocaleAndPageId('ru', $page->page_id);
        $slug_de = $repo->getSlugByLocaleAndPageId('de', $page->page_id);
        $slug_kg = $repo->getSlugByLocaleAndPageId('kg', $page->page_id);

        return view('pages.edit')
            ->with('page', $page)
            ->with('slug_ru', $slug_ru)
            ->with('slug_de', $slug_de)
            ->with('slug_kg', $slug_kg);
    }

    public function edit(Request $request, PagesRepo $repo, $slug)
    {
        $rules = [
            'content' => 'required'
        ];
        $messages = [
            'content.required' => 'Заполните информацию о странице.'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        $repo->updateTranslation($slug, [
            'content' => $request['content']
        ]);

        return redirect()->route('admin.pages.edit_form', $slug);
    }
}
