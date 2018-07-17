<?php

namespace App;

use Illuminate\Database\Eluquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class PostTranslation extends Model
{
  use Sluggable;

  public $timestamps = false;
  protected $fillable = ['title', 'slug', 'content'];

  public function sluggable()
  {
    return [
      'slug' => [
        'source' => 'title'
      ]
    ];
  }
}
