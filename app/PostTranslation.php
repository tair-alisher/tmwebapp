<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class PostTranslation extends Model
{
  use Sluggable;

  public $timestamps = false;
  protected $fillable = ['title', 'slug', 'description', 'content'];

  public function sluggable()
  {
    return [
      'slug' => [
        'source' => 'title'
      ]
    ];
  }
}
