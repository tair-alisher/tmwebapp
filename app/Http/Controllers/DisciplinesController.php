<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discipline;

class DisciplinesController extends Controller
{
    public function disciplines()
    {
        $disciplines = Discipline::latest()->get();

        return view('disciplines.index')
            ->with('disciplines', $disciplines);
    }

    public function allDisciplines($locale)
    {
        return view();
    }
}
