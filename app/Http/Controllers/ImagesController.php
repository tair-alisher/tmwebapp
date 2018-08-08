<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\AlbumsRepo;
use App\Repositories\ImagesRepo;
use App\Album;
use App\Image;

class ImagesController extends Controller
{
    public function index($slug)
    {
        $album = Album::whereTranslation('slug', $slug)
            ->firstOrFail();

        if ( $album->translate()->where('slug', $slug)->first()->locale != app()->getLocale() ) {
            return redirect()->route('albums.show', $album->translate()->slug);
        }

        $images = Image::where('album_id', $album->id)->paginate(10);

        return view('images.index')
            ->with('album', $album)
            ->with('images', $images);
    }

    /* ********** admin images ********** */

    public function images(AlbumsRepo $albumsRepo, $id)
    {
        \Auth::user()->userIs('gallery_admin');
        $album = $albumsRepo->getAlbumTranslation('ru', $id);

        $images = Image::where('album_id', $album->album_id)->paginate(10);

        return view('images.images')
            ->with('album', $album)
            ->with('images', $images);
    }
}
