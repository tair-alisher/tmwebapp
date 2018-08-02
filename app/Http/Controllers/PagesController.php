<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Repositories\ProjectsRepo;
use App\Repositories\PostsRepo;
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
        $this->middleware('auth')->except([
            'index',
            'show',
            'disciplines',
            'eduProjects',
            'showEduProject'
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

    public function disciplines()
    {
        $disciplines = Discipline::latest()->get();

        return view('pages.disciplines')
            ->with('disciplines', $disciplines);
    }

    public function eduProjects(ProjectsRepo $repo)
    {
        $projects = $repo
            ->projectsListOrderedByDate(app()->getLocale())
            ->paginate(10);

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

    /* ********** admin ********** */

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

    public function allProjects(ProjectsRepo $repo, $locale)
    {
        $projects = $repo
            ->getProjectsByLocale($locale)
            ->paginate(10);
        
        return view('projects.projects')
            ->with('locale', $locale)
            ->with('projects', $projects);
    }

    public function editProjectTranslationForm(ProjectsRepo $repo, $slug)
    {
        $project = $repo->getProjectTranslationBySlug($slug);

        $slug_ru = $repo->getSlugByLocaleAndProjectId('ru', $project->edu_project_id);
        $slug_de = $repo->getSlugByLocaleAndProjectId('de', $project->edu_project_id);
        $slug_kg = $repo->getSlugByLocaleAndProjectId('kg', $project->edu_project_id);

        return view('projects.edit_translation')
            ->with('project', $project)
            ->with('slug_ru', $slug_ru)
            ->with('slug_de', $slug_de)
            ->with('slug_kg', $slug_kg);
    }

    public function editProjectTranslation(Request $request, ProjectsRepo $repo, $slug)
    {
        $rules = [
            'title' => 'required|max:191',
            'content' => 'required'
        ];
        $messages = [
            'title.required' => 'Название обязательно для заполнения.',
            'title.max' => 'Название слишком длинное.',
            'content.required' => 'Информация обязательна для заполнения.'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        $locale = $repo->getLocaleBySlug($slug);
        $new_slug = $repo->toSlug($request['title']) . '-' . $locale;

        $repo->updateProjectTranslation($slug, [
            'title' => $request['title'],
            'slug' => $new_slug,
            'content' => $request['content']
        ]);

        return redirect()
            ->route('admin.projects.edit_translation_form', $new_slug);
    }

    public function createProjectTranslationForm(ProjectsRepo $repo, $locale, $project_id)
    {
        $slug_ru = $repo->getSlugByLocaleAndProjectId('ru', $project_id);
        $slug_de = $repo->getSlugByLocaleAndProjectId('de', $project_id);
        $slug_de = $repo->getSlugByLocaleAndProjectId('kg', $project_id);

        return view('projects.create_translation')
            ->with('slug_ru', $slug_ru)
            ->with('slug_de', $slug_de)
            ->with('slug_kg', $slug_kg)
            ->with('locale', $locale)
            ->with('project_id', $project_id);
    }

    public function createProjectTranslation(ProjectRepo $repo, Request $request, $locale, $project_id)
    {
        $rules = [
            'title' => 'required|max:191',
            'cotnent' => 'required'
        ];
        $messages = [
            'title.required' => 'Название необходимо для заполнения.',
            'title.max' => 'Название слишком длинное.',
            'content.required' => 'Информация о проекте необходима для заполнения.'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        $slug = $repo->toSlug($request['title']) . '-' . $locale;
        $repo->createProjectTranslation([
            'project_id' => $project_id,
            'locale' => $locale,
            'title' => $request['title'],
            'slug' => $slug,
            'content' => $request['content']
        ]);

        return redirect()
            ->route('admin.projects.edit_translation_form', $slug);
    }

    public function editProjectForm(ProjectsRepo $repo, $id)
    {
        $project = $repo->getProjectById($id);

        return view('projects.edit')
            ->with('project', $project);
    }

    public function editProject(Request $request, ProjectsRepo $repo, $id)
    {
        $rules = [
            'views' => 'required|numeric|max:10',
            'created_at' => 'date'
        ];
        $messages = [
            'views.required' => 'Поле "Просмотры" обязательно для заполнения.',
            'views.numeric' => 'Поле "Просмотры" должно содержать целочисленное значение.',
            'created_at.date' => 'Дата указа в неверном формате.'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        if ($request['created_at'] == null) {
            $created_at = $repo->getCreatedAtById($id);
        } else {
            $created_at = $request['created_at'];
        }

        $repo->updateProject($id, [
            'views' => $request['views'],
            'created_at' => $created_at
        ]);

        return redirect()
            ->route('admin.projects.edit_form', $id);
    }

    public function createProjectForm($locale)
    {
        return view('projects.create')
            ->with('locale', $locale);
    }

    public function createProject(Request $request, ProjectsRepo $repo, $locale)
    {
        $rules = [
            'title' => 'required|max:191',
            'content' => 'required'
        ];
        $messages = [
            'title.required' => 'Название необходимо для заполнения',
            'title.max' => 'Название слишком длинное.',
            'content.required' => 'Информация о проекте необходима для заполнения.'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        $project_id = $repo->createProjectAndGetId();
        $slug = $repo->toSlug($request['title']) . '-' . $locale;

        $repo->createProjectTranslation([
            'edu_project_id' => $project_id,
            'locale' => $locale,
            'title' => $request['title'],
            'slug' => $slug,
            'content' => $request['content']
        ]);

        return redirect()
            ->route('admin.projects.edit_translation_form', $slug);
    }

    public function deleteProject(ProjectsRepo $repo, $project_id)
    {
        $repo->deleteProject($project_id);
        $repo->deleteProjectTranslations($project_id);

        return redirect()
            ->route('admin.projects', 'ru');
    }
}
