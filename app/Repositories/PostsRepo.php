<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Intervention;

class PostsRepo extends Repository
{
  public function find($id)
  {
    return DB::table('posts')
      ->where('id', $id)
      ->first();
  }

  public function create()
  {
    return DB::table('posts')->insertGetId([
      'created_at' => Carbon::today(),
      'updated_at' => Carbon::today()
    ]);
  }

  public function update($id, $data)
  {
    $data['updated_at'] = Carbon::today();

    DB::table('posts')
      ->where('id', $id)
      ->update($data);
  }

  public function delete($post_id)
  {
    DB::table('posts')
      ->where('id', $post_id)
      ->delete();
  }

  public function findTranslation($slug)
  {
    return DB::table('post_translations')
      ->where('slug', $slug)
      ->first();
  }

  public function createTranslation($data)
  {
    DB::table('post_translations')
      ->insert($data);
  }

  public function updateTranslation($slug, $data)
  {
    DB::table('post_translations')
      ->where('slug', $slug)
      ->update($data);
  }

  public function deleteTranslations($post_id)
  {
    DB::table('post_translations')
      ->where('post_id', $post_id)
      ->delete();
  }

  public function duplicateTranslation($id)
  {
    $langs = ['ru', 'de', 'kg'];

    $translation = DB::table('post_translations')
      ->where('id', $id)
      ->first();

    $translations = DB::table('post_translations')
      ->where('post_id', $translation->post_id)
      ->where('locale', '!=', $translation->locale)
      ->get();

    if (count($translations) < (count($langs) - 1)) {
      unset($langs[array_search($translation->locale, $langs)]);
      foreach ($translations as $trans) {
        unset($langs[array_search($translation->locale, $langs)]);
      }

      foreach ($langs as $locale) {
        $this->createTranslation([
          'post_id' => $translation->post_id,
          'locale' => $locale,
          'description' => $translation->description,
          'title' => $translation->title,
          'slug' => $translation->slug . '-' . $locale,
          'content' => $translation->content
        ]);
      }
    } else {
      foreach ($translations as $trans) {
        $this->updateTranslation($trans->slug, [
          'description' => $translation->description,
          'title' => $translation->title,
          'slug' => $translation->slug . '-' . $trans->locale,
          'content' => $translation->content
        ]);
      }
    }

    return $translation->slug;
  }

  public function getCreatedAtById($id)
  {
    return DB::table('posts')
      ->where('id', $id)
      ->value('created_at');
  }

  public function getTwoLast($locale)
  {
    return DB::table('post_translations as pt')
      ->leftJoin('posts as p', 'pt.post_id', '=', 'p.id')
      ->selectRaw('p.created_at created_at, p.views views, pt.title title, pt.slug slug')
      ->where('locale', $locale)
      ->orderBy('p.created_at', 'desc')
      ->limit(2)
      ->get();
  }

  public function postsListOrderedByDate($locale)
  {
    return DB::table('post_translations as pt')
      ->leftJoin('posts as p', 'pt.post_id', '=', 'p.id')
      ->select(
        'pt.title as title',
        'pt.slug as slug',
        'pt.description as description',
        'p.created_at as created_at',
        'p.views as views'
        )
      ->where('locale', $locale)
      ->orderBy('created_at', 'desc');
  }

  public function filter($query, $filters)
  {
    if ($month = $filters['month']) {
      $query = $query->whereRaw('MONTH(p.created_at) = ' . $month);
    }
    if ($year = $filters['year']) {
      $query = $query->whereRaw('YEAR(p.created_at) = ' . $year);
    }

    return $query;
  }

  public function getSlugByLocaleAndPostId($locale, $post_id)
  {
    return DB::table('post_translations')
      ->where('post_id', $post_id)
      ->where('locale', $locale)
      ->value('slug');
  }

  public function getLocaleBySlug($slug)
  {
    return DB::table('post_translations')
      ->where('slug', $slug)
      ->value('locale');
  }

  public function getItemsByLocale($locale)
  {
    return DB::table('post_translations')
      ->join('posts', 'post_translations.post_id', '=', 'posts.id')
      ->where('post_translations.locale', $locale)
      ->orderBy('posts.created_at', 'desc');
  }
}
