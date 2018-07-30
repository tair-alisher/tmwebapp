<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Page;
use App\Post;
use App\Employee;
use App\Partner;
use App\Discipline;
use App\EduProject;
use Validator;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['editForm', 'edit']);
    }

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

        return view('pages.show')
            ->with('page', $page);
    }

    public function disciplines()
    {
        $disciplines = Discipline::latest()->get();

        return view('pages.disciplines')
            ->with('disciplines', $disciplines);
    }

    public function eduProjects()
    {
        $projects = EduProject::latest()->paginate(10);

        return view('pages.projects')
            ->with('projects', $projects);
    }

    public function showEduProject($slug)
    {
        $project = EduProject::whereTranslation('slug', $slug)->firstOrFail();

        if ( $project->translate()->where('slug', $slug)->first()->locale != app()->getLocale() ) {
            return redirect()->route('edu_projects.show', $project->translate()->slug);
        }

        return view('pages.show_project')
            ->with('project', $project);
    }

    public function editForm($slug)
    {
        $page = DB::table('page_translations')
            ->where('slug', $slug)
            ->first();

        $slug_ru = DB::table('page_translations')
            ->where('page_id', $page->page_id)
            ->where('locale', 'ru')->value('slug');

        $slug_de = DB::table('page_translations')
            ->where('page_id', $page->page_id)
            ->where('locale', 'de')->value('slug');
        
        $slug_kg = DB::table('page_translations')
            ->where('page_id', $page->page_id)
            ->where('locale', 'kg')->value('slug');

        return view('pages.edit')
            ->with('page', $page)
            ->with('slug_ru', $slug_ru)
            ->with('slug_de', $slug_de)
            ->with('slug_kg', $slug_kg);
    }

    public function edit(Request $request, $slug)
    {
        $rules = [
            'content' => 'required'
        ];
        $messages = [
            'content.required' => 'Заполните информацию о странице.'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        $page = DB::table('page_translations')
            ->where('slug', $slug)
            ->update(['content' => $request['content']]);

        return redirect()->route('admin.pages.edit_form', $slug);
    }
}
