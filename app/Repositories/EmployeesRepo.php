<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EmployeesRepo extends Repository
{
  public function find($employee_id)
  {
    return DB::table('employees')
      ->where('id', $employee_id)
      ->first();
  }

  public function create($data)
  {
    $data['created_at'] = Carbon::today();
    $data['updated_at'] = Carbon::today();

    return DB::table('employees')
      ->insertGetId($data);
  }

  public function update($employee_id, $data)
  {
    $data['updated_at'] = Carbon::today();

    DB::table('employees')
      ->where('id', $employee_id)
      ->update($data);
  }

  public function delete($employee_id)
  {
    $image = $this->getImage($employee_id);

    DB::table('employees')
      ->where('id', $employee_id)
      ->delete();

    if (strlen($image) > 0 && $image != 'default.png') {
      $filepath = public_path('images/employees') . '/' . $image;
      $this->deleteFile($filepath);
    }
  }

  public function findTranslation($translation_id)
  {
    return DB::table('employee_translations')
      ->where('id', $translation_id)
      ->first();
  }

  public function createTranslation($data)
  {
    return DB::table('employee_translations')
      ->insertGetId($data);
  }

  public function deleteTranslations($employee_id)
  {
    DB::table('employee_translations')
      ->where('employee_id', $employee_id)
      ->delete();
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

  public function getImage($employee_id)
  {
    return DB::table('employees')
      ->where('id', $employee_id)
      ->value('image');
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
      ->selectRaw('
        et.id id,
        et.employee_id employee_id,
        et.position position,
        et.name name,
        et.slug slug,
        et.degree degree,
        e.image image,
        e.email email
        ')
      ->where('et.locale', $locale)
      ->orderBy('e.created_at', 'asc')
      ->get();
  }
}