<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Post extends Model
{
    use Translatable;

    public $translatedAttributes = ['title', 'slug', 'description', 'content'];
    protected $fillable = ['title', 'slug', 'description', 'content'];

    public function scopeFilter($query, $filters)
    {
        if ($month = $filters['month']) {
            $query->whereMonth('created_at', $month);
        }
        if ($year = $filters['year']) {
            $query->whereYear('created_at', $year);
        }
    }

    public static function pinnedPosts()
    {
        return static::latest()
            ->where('pinned', true)
            ->orderBy('created_at', 'desc')
            ->get();
    }
}
