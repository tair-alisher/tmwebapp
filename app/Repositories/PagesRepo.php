<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PagesRepo extends Repository
{
  public function getTranslationBySlug($slug)
  {
    return DB::table('page_translations')
      ->where('slug', $slug)
      ->first();
  }

  public function getSlugByLocaleAndPageId($locale, $page_id)
  {
    return DB::table('page_translations')
      ->where('locale', $locale)
      ->where('page_id', $page_id)
      ->value('slug');
  }

  public function updateTranslation($slug, $data)
  {
    DB::table('page_translations')
      ->where('slug', $slug)
      ->update($data);
  }
}