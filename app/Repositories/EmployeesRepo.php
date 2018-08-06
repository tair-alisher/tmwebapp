<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EmployeesRepo extends Repository
{
  public function create($data)
  {
    $data['created_at'] = Carbon::today();
    $data['updated_at'] = Carbon::today();

    return DB::table('employees')
      ->insertGetId($data);
  }

  public function findTranslation($translation_id)
  {
    return DB::table('employee_translations')
      ->where('id', $translation_id)
      ->first();
  }

  public function getTranslationId($locale, $employee_id)
  {
    return DB::table('employee_translations')
      ->where('locale', $locale)
      ->where('employee_id', $employee_id)
      ->value('id');
  }

  public function updateTranslation($translation_id, $data)
  {
    DB::table('employee_translations')
      ->where('id', $translation_id)
      ->update($data);
  }

  public function getLocale($translation_id)
  {
    return DB::table('employee_translations')
      ->where('id', $translation_id)
      ->value('locale');
  }

  public function getItemsByLocale($locale)
  {
    return DB::table('employee_translations as et')
      ->join('employees as e', 'et.employee_id', '=', 'e.id')
      ->selectRaw('et.id id, et.name name, et.slug slug')
      ->where('et.locale', $locale)
      ->orderBy('e.created_at', 'desc');
  }
}