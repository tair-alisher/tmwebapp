<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AlbumsRepo extends Repository
{
  public function find($id)
  {
    return DB::table('albums')
      ->where('id', $id)
      ->first();
  }

  public function create($data)
  {
    $data['created_at'] = Carbon::today();
    $data['updated_at'] = Carbon::today();

    return DB::table('albums')
      ->insertGetId($data);
  }

  public function update($id, $data)
  {
    $data['updated_at'] = Carbon::today();

    DB::table('albums')
      ->where('id', $id)
      ->update($data);
  }

  public function findTranslation($translation_id)
  {
    return DB::table('album_translations')
      ->where('id', $translation_id)
      ->first();
  }

  public function createTranslation($data)
  {
    return DB::table('album_translations')
      ->insertGetId($data);
  }

  public function getTranslationId($locale, $album_id)
  {
    return DB::table('album_translations')
      ->where('locale', $locale)
      ->where('album_id', $album_id)
      ->value('id');
  }

  public function getImage($id)
  {
    return DB::table('albums')
      ->where('id', $id)
      ->value('image');
  }
}