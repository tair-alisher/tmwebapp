<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Discipline extends Model
{
    use Translatable;

    public $translatedAttributes = ['title', 'file_title'];
    protected $fillable = ['title', 'file_title'];
}
