<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumsController extends Controller
{
    public function index()
    {
        $albums = Album::latest()->paginate(6);

        return view('gallery.index')
            ->with('albums', $albums);
    }
}
