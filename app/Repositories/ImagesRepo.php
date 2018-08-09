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
    if ($image->width() > 1000) {
      $image->resize(1000, null, function ($constraint) {
        $constraint->aspectRatio();
      });
    }
    if ($image->height() > 1000) {
      $image->resize(null, 1000, function ($constraint) {
        $constraint->aspectRatio();
      });
    }
    $filename = $this->makeUniqueFilename($file);
    $image->save(public_path('images/gallery/'.$filename));
    
    // thumbnail
    if ($image->width() > $image->height()) {
      $image->resize(400, null, function ($constraint) {
        $constraint->aspectRatio();
      })->save(public_path('images/gallery/thumbs/'.$filename));
    } else {
      $image->resize(null, 400, function ($constraint) {
        $constraint->aspectRatio();
      })->save(public_path('images/gallery/thumbs/'.$filename));
    }
    
    
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

      $this->albumUpdated($album_id);
  }

  public function albumUpdated($album_id)
  {
    DB::table('albums')
      ->where('id', $album_id)
      ->update([
        'updated_at' => Carbon::now()
      ]);
  }

  public function getImage($id)
  {
    return DB::table('images')
      ->where('id', $id)
      ->value('image');
  }

  public function delete($image_id)
  {
    if (strlen($image = $this->getImage($image_id)) > 0) {
      $filepath_thumb = public_path('images/gallery/thumbs') . '/' . $image;
      $this->deleteFile($filepath_thumb);

      $filepath_image = public_path('images/gallery') . '/' . $image;
      $this->deleteFile($filepath_image);
    }

    DB::table('images')
      ->where('id', $image_id)
      ->delete();
  }
}