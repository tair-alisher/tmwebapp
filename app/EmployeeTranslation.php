<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class EmployeeTranslation extends Model
{
    use Sluggable;

    public $timestamps = false;
    protected $fillable = ['name', 'slug', 'info'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
