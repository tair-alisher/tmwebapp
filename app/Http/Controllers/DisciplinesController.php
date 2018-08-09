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
    public function index(DisciplinesRepo $repo)
    {
        $files = $repo->filesListOrderedByDate(app()->getLocale());

        return view('disciplines.index')
            ->with('files', $files);
    }

    /* ********** admin disciplines ********** */

    public function disciplines(DisciplinesRepo $repo, $locale)
    {
        \Auth::user()->userIs('pages_admin');
        $files = $repo->getItemsByLocale($locale);

        return view('disciplines.disciplines')
            ->with('locale', $locale)
            ->with('files', $files);
    }

    public function createForm($locale)
    {
        \Auth::user()->userIs('pages_admin');
        return view('disciplines.create')
            ->with('locale', $locale);
    }

    public function create(Request $request, DisciplinesRepo $repo, $locale)
    {
        \Auth::user()->userIs('pages_admin');
        $rules = [
            'title' => 'required|max:191',
            'file' => 'required'
        ];
        $messages = [
            'title.required' => 'Название обязательно для заполнения.',
            'title.max' => 'Название слишком длинное.',
            'file.required' => 'Файл обязателен для загрузки.'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $discipline_id = $repo->create();

            $file = $request->file('file');
            $filename = $repo->makeUniqueFilename($file);
            $file->move(public_path('files/disciplines'), $filename);

            $file_id = $repo->addFile([
                'discipline_id' => $discipline_id,
                'locale' => $locale,
                'title' => $request['title'],
                'file_title' => $filename
            ]);

            return redirect()
                ->route('admin.disciplines.edit_file_form', ['file_id' => $file_id]);
        }

        return back()->withErrors([
            'message' => 'Произошла ошибка при загрузке файла. Попробуйте еще раз.'
        ]);
    }

    public function editForm(DisciplinesRepo $repo, $discipline_id)
    {
        \Auth::user()->userIs('pages_admin');
        $discipline = $repo->find($discipline_id);

        return view('disciplines.edit')
            ->with('discipline', $discipline);
    }

    public function edit(Request $request, DisciplinesRepo $repo, $discipline_id)
    {
        \Auth::user()->userIs('pages_admin');
        $rules = ['created_at' => 'date'];
        $messages = ['created_at.date' => 'Дата указана в неверном формате.'];
        Validator::make($request->all(), $rules, $messages)->validate();

        if ($request['created_at'] == null) {
            $created_at = $repo->getCreatedAtValue($discipline_id);
        } else {
            $created_at = $request['created_at'];
        }

        $repo->update($discipline_id, [
            'created_at' => $created_at
        ]);

        return redirect()
            ->route('admin.disciplines.edit_form', $discipline_id)
            ->with('message', 'Изменения сохранены.');
    }

    public function addFileForm(DisciplinesRepo $repo, $locale, $discipline_id)
    {
        \Auth::user()->userIs('pages_admin');
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

    public function addFile(Request $request, DisciplinesRepo $repo, $locale, $discipline_id)
    {
        \Auth::user()->userIs('pages_admin');
        $rules = [
            'title' => 'required|max:191',
            'file' => 'required'
        ];
        $messages = [
            'title.required' => 'Название обязательно для заполнения.',
            'title.max' => 'Название слишком длинное.',
            'file.required' => 'Файл обязателен для загрузки.'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $file = $request->file('file');
            $filename = $repo->makeUniqueFilename($file);
            $file->move(public_path('files/disciplines'), $filename);

            $file_id = $repo->addFile([
                'discipline_id' => $discipline_id,
                'locale' => $locale,
                'title' => $request['title'],
                'file_title' => $filename
            ]);

            return redirect()
                ->route('admin.disciplines.edit_file_form', ['file_id' => $file_id])
                ->with('message', 'Файл добавлен.');
        }
        
        return back()->withErrors([
            'message' => 'Произошла ошибка при загрузке файла. Попробуйте еще раз.'
        ]);
    }

    public function editFileForm(DisciplinesRepo $repo, $file_id)
    {
        \Auth::user()->userIs('pages_admin');
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
        \Auth::user()->userIs('pages_admin');
        $rules = ['title' => 'required|max:191'];
        $messages = [
            'title.required' => 'Название обязательно для заполнения.',
            'title.max' => 'Название слишком длинное.'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        $oldFilename = $repo->getFilename($file_id);

        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $file = $request->file('file');
            $filename = $repo->makeUniqueFilename($file);
            $file->move(public_path('files/disciplines'), $filename);

            $filepath = public_path('files/disciplines/') . $oldFilename;
            $repo->deleteFile($filepath);
        } else {
            $filename = $oldFilename;
        }
        
        $repo->updateFile($file_id, [
            'title' => $request['title'],
            'file_title' => $filename
        ]);

        return redirect()
            ->route('admin.disciplines.edit_file_form', $file_id)
            ->with('message', 'Изменения сохранены.');
    }

    public function delete(DisciplinesRepo $repo, $discipline_id)
    {
        \Auth::user()->userIs('pages_admin');
        $repo->deleteFiles($discipline_id);
        $repo->delete($discipline_id);

        return redirect()
            ->route('admin.disciplines', 'ru')
            ->with('message', 'Запись удалена.');
    }
}
