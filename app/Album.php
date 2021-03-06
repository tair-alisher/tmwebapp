<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Album extends Model
{
    use Translatable;

    public $translatedAttributes = ['title', 'slug'];
    public $fillable = ['title', 'slug'];
}
