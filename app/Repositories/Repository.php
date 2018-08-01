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
}