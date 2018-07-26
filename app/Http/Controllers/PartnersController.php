<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;

class PartnersController extends Controller
{
    public function index()
    {
        $partners = Partner::all();

        return view('partners.index')
            ->with('partners', $partners);
    }
}
