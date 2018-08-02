<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DisciplinesRepo extends Repository
{
  public function findFile($id)
  {
    return DB::table('discipline_translations')
      ->where('id', $id)
      ->first();
  }

  public function updateFile($file_id, $data)
  {
    DB::table('discipline_translations')
      ->where('id', $file_id)
      ->update($data);
  }

  public function getFileId($locale, $discipline_id)
  {
    return DB::table('discipline_translations')
      ->where('locale', $locale)
      ->where('discipline_id', $discipline_id)
      ->value('id');
  }

  public function getItemsByLocale($locale)
  {
    return DB::table('discipline_translations as dt')
      ->join('disciplines as d', 'dt.discipline_id', '=', 'd.id')
      ->select(
        'dt.id as file_id',
        'd.id as discipline_id',
        'dt.title as title'
      )
      ->where('dt.locale', $locale)
      ->orderBy('d.created_at', 'desc')
      ->get();
  }

  public function getFilename($file_id)
  {
    return DB::table('discipline_translations')
      ->where('id', $file_id)
      ->value('file_title');
  }
}