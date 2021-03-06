<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class PageTranslation extends Model
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
