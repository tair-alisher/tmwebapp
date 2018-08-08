<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Intervention;

class ImagesRepo extends Repository
{
  public function addImage($album_id, $file)
  {
    $image = Intervention::make($file);
    // big image
    $image->resize(1000, null, function ($constraint) {
      $constraint->aspectRatio();
    });
    $filename = $this->makeUniqueFilename($file);
    $image->save(public_path('images/gallery/'.$filename));
    
    // thumbnail
    $image->resize(300, null, function ($constraint) {
      $constraint->aspectRatio();
    })->save(public_path('images/gallery/thumbs/'.$filename));
    
    $this->create($album_id, $filename);
  }

  public function create($album_id, $image)
  {
    DB::table('images')
      ->insert([
        'album_id' => $album_id,
        'image' => $image,
        'created_at' => Carbon::today(),
        'updated_at' => Carbon::today()
      ]);
  }
}