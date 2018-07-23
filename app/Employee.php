<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Employee extends Model
{
    use Translatable;

    public $translatedAttributes = ['name', 'slug', 'position', 'degree', 'info'];
    protected $fillable = ['name', 'slug', 'position', 'degree', 'info'];
}
