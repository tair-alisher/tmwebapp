<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Page extends Model
{
    use Translatable;

    public $translatedAttributes = ['title', 'slug', 'content'];
    protected $fillable = ['title', 'slug', 'content'];
}
