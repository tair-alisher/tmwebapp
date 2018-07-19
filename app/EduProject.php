<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class EduProject extends Model
{
    use Translatable;

    public $translatedAttributes = ['title', 'slug', 'content'];
    protected $fillable = ['title', 'slug', 'content'];
}
