<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DisciplinesRepo;
use App\Discipline;
use Validator;

class DisciplinesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }
    public function index()
    {
        $files = Discipline::latest()->get();

        return view('disciplines.index')
            ->with('files', $files);
    }

    /* ********** admin disciplines ********** */

    public function disciplines(DisciplinesRepo $repo, $locale)
    {
        $files = $repo->getItemsByLocale($locale);

        return view('disciplines.disciplines')
            ->with('locale', $locale)
            ->with('files', $files);
    }

    public function editFileForm(DisciplinesRepo $repo, $file_id)
    {
        $file = $repo->findFile($file_id);

        $file_id_ru = $repo->getFileId('ru', $file->discipline_id);
        $file_id_de = $repo->getFileId('de', $file->discipline_id);
        $file_id_kg = $repo->getFileId('kg', $file->discipline_id);

        return view('disciplines.edit_file')
            ->with('file', $file)
            ->with('file_id_ru', $file_id_ru)
            ->with('file_id_de', $file_id_de)
            ->with('file_id_kg', $file_id_kg);
    }

    public function editFile(Request $request, DisciplinesRepo $repo, $file_id)
    {
        $rules = [];
        $messages = [];
        Validator::make($request->all(), $rules, $messages)->validate();

        $oldFilename = $repo->getFilename($file_id);

        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $file = $request->file('file');
            $originalNameParts = explode('.', $file->getClientOriginalName());
            array_pop($originalNameParts);
            $originalName = implode('.', $originalNameParts);
            $filename = $repo->toSlug($originalName) . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('files/disciplines'), $filename);

            $filepath = public_path('files/disciplines') . '/' . $oldFilename;
            if (file_exists($filepath)) {
                unlink($filepath);
            }
        } else {
            $filename = $oldFilename;
        }
        
        $repo->updateFile($file_id, [
            'title' => $request['title'],
            'file_title' => $filename
        ]);

        return redirect()->route('admin.disciplines.edit_file_form', $file_id);
    }

    public function addFileForm(DisciplinesRepo $repo, $locale, $discipline_id)
    {
        $file_id_ru = $repo->getFileId('ru', $discipline_id);
        $file_id_de = $repo->getFileId('de', $discipline_id);
        $file_id_kg = $repo->getFileId('kg', $discipline_id);

        return view('disciplines.add_file')
            ->with('file_id_ru', $file_id_ru)
            ->with('file_id_de', $file_id_de)
            ->with('file_id_kg', $file_id_kg)
            ->with('locale', $locale)
            ->with('discipline_id', $discipline_id);
    }

    public function addFile() {}
}
