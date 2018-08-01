<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Dimsav\Translatable\Translatable;
use Transliterate;

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

    public static function toSlug($string)
    {
        return Transliterate::make(
            $string,
            [
                'type' => 'url',
                'lowercase' => true
            ]
        );
    }

    public static function getArchives()
    {
        return static::selectRaw('year(created_at) year, month(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }
}
