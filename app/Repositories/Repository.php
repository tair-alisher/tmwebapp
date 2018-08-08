<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Transliterate;

class Repository
{
  public function toSlug($string)
  {
    return Transliterate::make(
      $string,
      [
        'type' => 'url',
        'lowercase' => true
      ]
    );
  }

  public function makeUniqueFilename($file)
  {
    $originalNameParts = explode('.', $file->getClientOriginalName());
    array_pop($originalNameParts);
    $originalName = implode('.', $originalNameParts);
    $filename = strtolower($this->toSlug($originalName)) . '-' . time() . '.' . strtolower($file->getClientOriginalExtension());

    return $filename;
  }

  public function deleteFile($filepath)
  {
    if (file_exists($filepath)) {
      unlink($filepath);
    }
  }
}