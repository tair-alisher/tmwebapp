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

    public static function getArchives($locale)
    {
        return DB::table('posts as p')
            ->join('post_translations as pt', 'p.id', '=', 'pt.post_id')
            ->selectRaw('year(p.created_at) year, month(p.created_at) month, count(pt.id) published')
            ->where('pt.locale', $locale)
            ->groupBy('year', 'month')
            ->orderByRaw('min(p.created_at) desc')
            ->get()
            ->toArray();
    }
}
