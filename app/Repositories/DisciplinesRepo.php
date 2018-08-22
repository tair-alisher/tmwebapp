<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DisciplinesRepo extends Repository
{
  public function find($discipline_id)
  {
    return DB::table('disciplines')
      ->where('id', $discipline_id)
      ->first();
  }

  public function create()
  {
    return DB::table('disciplines')
      ->insertGetId([
        'created_at' => Carbon::today(),
        'updated_at' => Carbon::today()
      ]);
  }

  public function update($discipline_id, $data)
  {
    $data['updated_at'] = Carbon::today();

    DB::table('disciplines')
      ->where('id', $discipline_id)
      ->update($data);
  }

  public function delete($discipline_id)
  {
    DB::table('disciplines')
      ->where('id', $discipline_id)
      ->delete();
  }

  public function findFile($id)
  {
    return DB::table('discipline_translations')
      ->where('id', $id)
      ->first();
  }

  public function addFile($data)
  {
    return DB::table('discipline_translations')
      ->insertGetId($data);
  }

  public function updateFile($file_id, $data)
  {
    DB::table('discipline_translations')
      ->where('id', $file_id)
      ->update($data);
  }

  public function deleteFiles($discipline_id)
  {
    $files = DB::table('discipline_translations')
      ->select('file_title as title')
      ->where('discipline_id', $discipline_id)
      ->get();

    foreach ($files as $file) {
      $filepath = public_path('files/disciplines') . '/' . $file->title;
      $this->deleteFile($filepath);
    }

    DB::table('discipline_translations')
      ->where('discipline_id', $discipline_id)
      ->delete();
  }

  public function filesListOrderedByDate($locale)
  {
    return DB::table('discipline_translations as dt')
      ->leftJoin('disciplines as d', 'dt.discipline_id', '=', 'd.id')
      ->selectRaw('dt.title title, dt.file_title file_title, d.created_at created_at')
      ->where('locale', $locale)
      ->orderBy('created_at', 'desc')
      ->get();
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

  public function getCreatedAtValue($discipline_id)
  {
    return DB::table('discipline_translations')
      ->where('id', $discipline_id)
      ->value('created_at');
  }
}