<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AlbumsRepo extends Repository
{
  public function getRuAlbums()
  {
    return DB::table('album_translations as at')
      ->join('albums as a', 'at.album_id', '=', 'a.id')
      ->selectRaw('
        at.title title,
        at.id id,
        at.album_id album_id
      ')
      ->where('locale', 'ru')
      ->orderBy('a.updated_at', 'desc');
  }
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

  public function delete($album_id)
  {
    $image = $this->getImage($album_id);

    DB::table('albums')
      ->where('id', $album_id)
      ->delete();
    
    if (strlen($image) > 0) {
      $filepath = public_path('images/gallery/albums') . '/' . $image;
      $this->deleteFile($filepath);
    }
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

  public function updateTranslation($translation_id, $data)
  {
    DB::table('album_translations')
      ->where('id', $translation_id)
      ->update($data);
  }

  public function deleteTranslations($album_id)
  {
    DB::table('album_translations')
      ->where('album_id', $album_id)
      ->delete();
  }

  public function getAlbumTranslation($locale, $album_id)
  {
    return DB::table('album_translations')
      ->where('album_id', $album_id)
      ->where('locale', $locale)
      ->first();
  }

  public function getTranslationId($locale, $album_id)
  {
    return DB::table('album_translations')
      ->where('locale', $locale)
      ->where('album_id', $album_id)
      ->value('id');
  }

  public function getLocale($id)
  {
    return DB::table('album_translations')
      ->where('id', $id)
      ->value('locale');
  }

  public function getImage($id)
  {
    return DB::table('albums')
      ->where('id', $id)
      ->value('image');
  }
}