<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProjectsRepo extends Repository
{
  public function getProjectsByLocale($locale)
  {
    return DB::table('edu_project_translations')
      ->join('edu_projects', 'edu_project_translations.edu_project_id', '=', 'edu_projects.id')
      ->where('edu_project_translations.locale', $locale)
      ->orderBy('edu_projects.created_at', 'desc');
  }

  public function projectsListOrderedByDate($locale)
  {
    return DB::table('edu_project_translations as pt')
      ->leftJoin('edu_projects as p', 'pt.edu_project_id', '=', 'p.id')
      ->selectRaw('pt.slug slug, pt.title title, p.created_at created_at, p.views views')
      ->where('locale', $locale)
      ->orderBy('created_at', 'desc');
  }

  public function getProjectTranslationBySlug($slug)
  {
    return DB::table('edu_project_translations')
      ->where('slug', $slug)
      ->first();
  }

  public function getSlugByLocaleAndProjectId($locale, $project_id)
  {
    return DB::table('edu_project_translations')
      ->where('edu_project_id', $project_id)
      ->where('locale', $locale)
      ->value('slug');
  }

  public function getLocaleBySlug($slug)
  {
    return DB::table('edu_project_translations')
      ->where('slug', $slug)
      ->value('locale');
  }

  public function updateProjectTranslation($slug, $data)
  {
    DB::table('edu_project_translations')
      ->where('slug', $slug)
      ->update($data);
  }

  public function createProjectTranslation($data)
  {
    DB::table('edu_project_translations')
      ->insert($data);
  }

  public function getProjectById($id)
  {
    return DB::table('edu_projects')
      ->where('id', $id)
      ->first();
  }

  public function getCreatedAtById($id)
  {
    return DB::table('edu_projects')
      ->where('id', $id)
      ->value('created_at');
  }

  public function updateProject($id, $data)
  {
    DB::table('edu_projects')
      ->where('id', $id)
      ->update($data);
  }

  public function createProjectAndGetId()
  {
    return DB::table('edu_projects')->insertGetId([
      'created_at' => Carbon::today(),
      'updated_at' => Carbon::today()
    ]);
  }

  public function deleteProject($project_id)
  {
    DB::table('edu_projects')
      ->where('id', $project_id)
      ->delete();
  }

  public function deleteProjectTranslations($project_id)
  {
    DB::table('edu_project_translations')
      ->where('edu_project_id', $project_id)
      ->delete();
  }
}