<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PartnersRepo extends Repository
{
  public function create($data)
  {
    $data['created_at'] = Carbon::today();
    $data['updated_at'] = Carbon::today();

    return DB::table('partners')
      ->insertGetId($data);
  }

  public function find($id)
  {
    return DB::table('partners')
      ->where('id', $id)
      ->first();
  }

  public function update($id, $data)
  {
    $data['updated_at'] = Carbon::today();

    DB::table('partners')
      ->where('id', $id)
      ->update($data);
  }

  public function delete($id)
  {
    $image = $this->getImageName($id);
    $filepath = public_path('images/partners/') . $image;
    $this->deleteFile($filepath);

    DB::table('partners')
      ->where('id', $id)
      ->delete();
  }

  public function getImageName($id)
  {
    return DB::table('partners')
      ->where('id', $id)
      ->value('image');
  }

  public function getPartnersWithImage()
  {
    return DB::table('partners')
      ->whereRaw('length(image) > 0')
      ->get();
  }
}