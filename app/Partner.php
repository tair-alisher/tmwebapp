<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Partner extends Model
{
    use Translatable;

    public $translatedAttributes = ['name', 'slug'];
    protected $fillable = ['name', 'slug'];
}
