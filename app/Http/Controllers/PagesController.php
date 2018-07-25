<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Post;
use App\Employee;
use App\Partner;
use App\Discipline;
use App\EduProject;

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
}
