<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\AlbumsRepo;
use App\Repositories\ImagesRepo;
use App\Album;
use App\Image;
use Intervention;
use Validator;

class ImagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'upload']);
        $this->middleware('web')->except('upload');
    }

    public function index($slug)
    {
        $album = Album::whereTranslation('slug', $slug)
            ->firstOrFail();

        if ( $album->translate()->where('slug', $slug)->first()->locale != app()->getLocale() ) {
            return redirect()->route('albums.show', $album->translate()->slug);
        }

        $images = Image::where('album_id', $album->id)->latest()->paginate(10);

        return view('images.index')
            ->with('album', $album)
            ->with('images', $images);
    }

    /* ********** admin images ********** */

    public function images(AlbumsRepo $albumsRepo, $id)
    {
        \Auth::user()->userIs('gallery_admin');
        $album = $albumsRepo->getAlbumTranslation('ru', $id);

        $images = Image::where('album_id', $album->album_id)->latest()->paginate(10);

        return view('images.images')
            ->with('album', $album)
            ->with('images', $images);
    }

    public function add(Request $request, ImagesRepo $repo, $album_id)
    {
        $rules = [];
        $messages = [];
        Validator::make($request->all(), $rules, $messages)->validate();

        if ( $request->hasFile('images') ) {
            $files = $request->file('images');
            foreach ($files as $file) {
                $repo->add($album_id, $file);
            }
        }

        return redirect()
            ->route('admin.images', ['id' => $album_id])
            ->with('message', 'Изображение добавлено.');
    }

    public function delete(ImagesRepo $repo, $id, $image_id)
    {
        $repo->delete($image_id);

        return redirect()
            ->route('admin.images', ['id' => $id])
            ->with('message', 'Изображение удалено.');
    }

    public function upload(Request $request)
    {
        // if ($request->hasFile('file')) {
        //     $file = $request->file('file');
        //     $filename = $repo->upload($file);
        //     return public_path('images/posts') . '/' . $filename;
        // } else {
        //     return $message = 'error';
        // }
        return true;
    }
}
