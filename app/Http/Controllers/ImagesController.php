<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Image;

class ImagesController extends Controller
{
    public function show($slug)
    {
        $album = Album::whereTranslation('slug', $slug)
            ->firstOrFail();

        if ( $album->translate()->where('slug', $slug)->first()->locale != app()->getLocale() ) {
            return redirect()->route('albums.show', $album->translate()->slug);
        }

        $images = Image::where('album_id', $album->id)->paginate(10);

        return view('gallery.show')
            ->with('album', $album)
            ->with('images', $images);
    }
}
