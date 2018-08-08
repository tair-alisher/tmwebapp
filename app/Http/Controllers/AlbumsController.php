<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\AlbumsRepo;
use App\Album;
use Validator;

class AlbumsController extends Controller
{
    public function index(AlbumsRepo $repo)
    {
        $albums = Album::latest()->paginate(6);

        return view('albums.index')
            ->with('albums', $albums);
    }

    /* ********** admin albums ********** */

    public function albums()
    {
        \Auth::user()->userIs('gallery_admin');
        $albums = Album::latest()->paginate(10);

        return view('albums.albums')
            ->with('albums', $albums);
    }

    public function createForm()
    {
        \Auth::user()->userIs('gallery_admin');
        return view('albums.create');
    }

    public function create(Request $request, AlbumsRepo $repo)
    {
        \Auth::user()->userIs('gallery_admin');
        $rules = [
            'title' => 'required|max:191',
            'image' => 'required'
        ];
        $messages = [
            'title.required' => 'Название альбома обязательно для заполнения.',
            'title.max' => 'Название альбома слишком длинное.',
            'image.required' => 'Загрузите обложку для альбома.'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $filename = $repo->makeUniqueFilename($image);
            $image->move(public_path('images/gallery/albums'), $filename);
        } else {
            return back()->withErrors([
                'message' => 'Произошла ошибка при загрузке изображения. Попробуйте еще раз.'
            ]);
        }

        $album_id = $repo->create([
            'image' => $filename
        ]);

        $slug = $repo->toSlug($request['title']) . '-' . 'ru';

        $translation_id = $repo->createTranslation([
            'album_id' => $album_id,
            'locale' => 'ru',
            'title' => $request['title'],
            'slug' => $slug
        ]);

        return redirect()
            ->route('admin.albums.edit_translation_form', ['translation_id' => $translation_id]);
    }
    
    public function editForm(Request $request, AlbumsRepo $repo, $id)
    {
        \Auth::user()->userIs('gallery_admin');
        $album = $repo->find($id);
        
        return view('albums.edit')
            ->with('album', $album);
    }
    public function edit(Request $request, AlbumsRepo $repo, $id)
    {
        \Auth::user()->userIs('gallery_admin');
        $rules = [
            'views' => 'required|numeric|max:10',
            'created_at' => 'required|date',
            'image' => 'required'
        ];
        $messages = [
            'views.required' => 'Поле "Просмотры" обязательно для заполнения.',
            'views.numeric' => 'Поле "Просмотры" должно содержать целочисленное значение.',
            'views.max' => 'Значение в поле "Просмотры" слишком велико.',
            'created_at.required' => 'Дата обязательня для заполнения.',
            'created_at.date' => 'Дата указана в неверном формате.',
            'image.required' => 'Загрузите обложку (изображение) альбома.'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        $oldFileName = $repo->getImage($id);
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $filename = $repo->makeUniqueFilename($image);
            $image->move(public_path('images/gallery/albums'), $filename);

            if (strlen($oldFileName) > 0) {
                $filepath = public_path('images/gallery/albums/') . $oldFileName;
                $repo->deleteFile($filepath);
            }
        } else {
            $filename = $oldFileName;
        }

        $repo->update($id, [
            'views' => $request['views'],
            'created_at' => $request['created_at'],
            'image' => $filename
        ]);

        return redirect()->route('admin.albums.edit_form', $id);
    }
    
    public function createTranslationForm(AlbumsRepo $repo, $locale, $album_id)
    {
        \Auth::user()->userIs('gallery_admin');
        $translation_ru = $repo->getTranslationId('ru', $album_id);
        $translation_de = $repo->getTranslationId('de', $album_id);
        $translation_kg = $repo->getTranslationId('kg', $album_id);

        return view('albums.create_translation')
            ->with('locale', $locale)
            ->with('album_id', $album_id)
            ->with('translation_ru', $translation_ru)
            ->with('translation_de', $translation_de)
            ->with('translation_kg', $translation_kg);
    }
    public function createTranslation(Request $request, AlbumsRepo $repo, $locale, $album_id)
    {
        \Auth::user()->userIs('gallery_admin');
        $rules = [
            'title' => 'required|max:191'
        ];
        $messages = [
            'title.required' => 'Название альбома обязательно для заполнения.',
            'title.max' => 'Название альбома слишком длинное.'
        ];
        Validator::make($request->all(), $rules, $messages)->valiate();

        $slug = $repo->toSlug($request['title']) . '-' . $locale;
        $translation_id = $repo->createTranslation([
            'album_id' => $album_id,
            'locale' => $locale,
            'title' => $request['title'],
            'slug' => $slug
        ]);

        return redirect()
            ->route('admin.albums.edit_translation_form', ['translation_id' => $translation_id]);
    }
    
    public function editTranslationForm(AlbumsRepo $repo, $translation_id)
    {
        \Auth::user()->userIs('gallery_admin');
        $album = $repo->findTranslation($translation_id);

        $translation_ru = $repo->getTranslationId('ru', $album->album_id);
        $translation_de = $repo->getTranslationId('de', $album->album_id);
        $translation_kg = $repo->getTranslationId('kg', $album->album_id);

        return view('albums.edit_translation')
            ->with('album', $album)
            ->with('translation_ru', $translation_ru)
            ->with('translation_de', $translation_de)
            ->with('translation_kg', $translation_kg);
    }
    public function editTranslation(Request $request, AlbumsRepo $repo, $translation_id)
    {
        \Auth::user()->userIs('gallery_admin');
        $rules = [
            'title' => 'required|max:191'
        ];
        $messages = [
            'title.required' => 'Название необходимо для заполнения.',
            'title.max' => 'Название слишком длинное.'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        $locale = $repo->getLocale($translation_id);
        $new_slug = $repo->toSlug($request['title']) . '-' . $locale;

        $repo->updateTranslation($translation_id, [
            'title' => $request['title'],
            'slug' => $new_slug
        ]);

        return redirect()
            ->route('admin.albums.edit_translation_form', ['translation_id' => $translation_id]);
    }
    
    public function delete(AlbumsRepo $repo, $album_id)
    {
        \Auth::user()->userIs('gallery_admin');
        // $repo->deleteImages($album_id);
        $repo->deleteTranslations($album_id);
        $repo->delete($album_id);

        return redirect()->route('admin.albums');
    }
}
