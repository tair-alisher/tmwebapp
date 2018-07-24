<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumsController extends Controller
{
    public function index()
    {
        $albums = Album::all();

        return view('gallery.index')
            ->with('albums', $albums);
    }
}
