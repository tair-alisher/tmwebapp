<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProjectsRepo;
use App\EduProject;
use Validator;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except([
            'index', 'show'
        ]);
    }
    public function index(ProjectsRepo $repo)
    {
        $projects = $repo
            ->projectsListOrderedByDate(app()->getLocale())
            ->paginate(10);

        return view('projects.index')
            ->with('projects', $projects);
    }

    public function show($slug)
    {
        $project = EduProject::whereTranslation('slug', $slug)->firstOrFail();

        if ( $project->translate()->where('slug', $slug)->first()->locale != app()->getLocale() ) {
            return redirect()->route('edu_projects.show', $project->translate()->slug);
        }

        return view('projects.show')
            ->with('project', $project);
    }

    /* ********** admin projects ********** */

    public function projects(ProjectsRepo $repo, $locale)
    {
        \Auth::user()->userIs('projects_admin');
        $projects = $repo
            ->getItemsByLocale($locale)
            ->paginate(10);

        return view('projects.projects')
            ->with('locale', $locale)
            ->with('projects', $projects);
    }

    public function createForm($locale)
    {
        \Auth::user()->userIs('projects_admin');
        return view('projects.create')
            ->with('locale', $locale);
    }

    public function create(Request $request, ProjectsRepo $repo, $locale)
    {
        \Auth::user()->userIs('projects_admin');
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

        $project_id = $repo->create();
        $slug = $repo->toSlug($request['title']) . '-' . $locale;

        $repo->createTranslation([
            'edu_project_id' => $project_id,
            'locale' => $locale,
            'title' => $request['title'],
            'slug' => $slug,
            'content' => $request['content']
        ]);

        return redirect()
            ->route('admin.projects.edit_translation_form', $slug);
    }

    public function editForm(ProjectsRepo $repo, $id)
    {
        \Auth::user()->userIs('projects_admin');
        $project = $repo->find($id);

        return view('projects.edit')
            ->with('project', $project);
    }

    public function edit(Request $request, ProjectsRepo $repo, $id)
    {
        \Auth::user()->userIs('projects_admin');
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

        $repo->update($id, [
            'views' => $request['views'],
            'created_at' => $created_at
        ]);

        return redirect()
            ->route('admin.projects.edit_form', $id)
            ->with('message', 'Изменения сохранены.');
    }

    public function createTranslationForm(ProjectsRepo $repo, $locale, $project_id)
    {
        \Auth::user()->userIs('projects_admin');
        $slug_ru = $repo->getSlugByLocaleAndProjectId('ru', $project_id);
        $slug_de = $repo->getSlugByLocaleAndProjectId('de', $project_id);
        $slug_kg = $repo->getSlugByLocaleAndProjectId('kg', $project_id);

        return view('projects.create_translation')
            ->with('slug_ru', $slug_ru)
            ->with('slug_de', $slug_de)
            ->with('slug_kg', $slug_kg)
            ->with('locale', $locale)
            ->with('project_id', $project_id);
    }

    public function createTranslation(Request $request, ProjectsRepo $repo, $locale, $project_id)
    {
        \Auth::user()->userIs('projects_admin');
        $rules = [
            'title' => 'required|max:191',
            'content' => 'required'
        ];
        $messages = [
            'title.required' => 'Название необходимо для заполнения.',
            'title.max' => 'Название слишком длинное.',
            'content.required' => 'Информация о проекте необходима для заполнения.'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        $slug = $repo->toSlug($request['title']) . '-' . $locale;
        $repo->createTranslation([
            'edu_project_id' => $project_id,
            'locale' => $locale,
            'title' => $request['title'],
            'slug' => $slug,
            'content' => $request['content']
        ]);

        return redirect()
            ->route('admin.projects.edit_translation_form', $slug)
            ->with('message', 'Запись создана');
    }

    public function editTranslationForm(ProjectsRepo $repo, $slug)
    {
        \Auth::user()->userIs('projects_admin');
        $project = $repo->findTranslation($slug);

        $slug_ru = $repo->getSlugByLocaleAndProjectId('ru', $project->edu_project_id);
        $slug_de = $repo->getSlugByLocaleAndProjectId('de', $project->edu_project_id);
        $slug_kg = $repo->getSlugByLocaleAndProjectId('kg', $project->edu_project_id);

        return view('projects.edit_translation')
            ->with('project', $project)
            ->with('slug_ru', $slug_ru)
            ->with('slug_de', $slug_de)
            ->with('slug_kg', $slug_kg);
    }

    public function editTranslation(Request $request, ProjectsRepo $repo, $slug)
    {
        \Auth::user()->userIs('projects_admin');
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

        $repo->updateTranslation($slug, [
            'title' => $request['title'],
            'slug' => $new_slug,
            'content' => $request['content']
        ]);

        return redirect()
            ->route('admin.projects.edit_translation_form', $new_slug)
            ->with('message', 'Изменения сохранены.');
    }

    public function delete(ProjectsRepo $repo, $project_id)
    {
        \Auth::user()->userIs('projects_admin');
        $repo->deleteTranslations($project_id);
        $repo->delete($project_id);

        return redirect()
            ->route('admin.projects', 'ru')
            ->with('message', 'Запись удалена.');
    }

    public function duplicate(ProjectsRepo $repo, $id)
    {
      $slug = $repo->duplicateTranslation($id);

      return redirect()
        ->route('admin.projects.edit_translation_form', $slug)
        ->with('message', 'Записи на других языках теперь заполнены аналогично.');
    }
}
