<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostsRepo;
use App\Post;
use Validator;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except([
            'index', 'show'
        ]);
    }

    public function index(PostsRepo $repo, Request $request)
    {
        $posts = $repo->filter(
            $repo->postsListOrderedByDate(app()->getLocale()),
            ['month' => $request['month'], 'year' => $request['year']]
        )->paginate(6);

        $archives = Post::getArchives(app()->getLocale());

        $pinned_posts = Post::pinnedPosts();

        return view('posts.index', compact('posts', 'pinned_posts', 'archives'));
    }

    public function show($slug)
    {
        $post = Post::whereTranslation('slug', $slug)
            ->firstOrFail();
        
        if (!$post->slug) { abort(404); }

        $pinned_posts = Post::pinnedPosts();

        if ( $post->translate()->where('slug', $slug)->first()->locale != app()->getLocale() ) {
            return redirect()->route('news.show', $post->translate()->slug);
        }
        return view('posts.show')
            ->with('post', $post)
            ->with('pinned_posts', $pinned_posts);
    }

    /* ********** admin ********** */

    public function posts(PostsRepo $repo, $locale)
    {
        \Auth::user()->userIs('posts_admin');
        $posts = $repo
            ->getItemsByLocale($locale)
            ->paginate(10);

        return view('posts.posts')
            ->with('locale', $locale)
            ->with('posts', $posts);
    }

    public function createForm($locale)
    {
        \Auth::user()->userIs('posts_admin');
        return view('posts.create')
            ->with('locale', $locale);
    }

    public function create(Request $request, PostsRepo $repo, $locale)
    {
        \Auth::user()->userIs('posts_admin');
        $post_id = $repo->create();
        $slug = $repo->toSlug($request['title']) . '-' . $locale;

        $repo->createTranslation([
            'post_id' => $post_id,
            'locale' => $locale,
            'title' => $request['title'],
            'slug' => $slug,
            'description' => $request['description'],
            'content' => $request['content']
        ]);

        return redirect()
            ->route('admin.posts.edit_translation_form', $slug);
    }

    public function editForm(PostsRepo $repo, $id)
    {
        \Auth::user()->userIs('posts_admin');
        $post = $repo->find($id);
        
        return view('posts.edit')
            ->with('post', $post);
    }

    public function edit(Request $request, PostsRepo $repo, $id)
    {
        \Auth::user()->userIs('posts_admin');
        $rules = [
            'views' => 'required|numeric',
            'created_at' => 'date'
        ];
        $messages = [
            'views.required' => 'Поле "Просмотры" обязательно для заполнения.',
            'views.numeric' => 'Поле "Просмотры" должно содержать целочисленное значение.',
            'created_at.date' => 'Дата указана в неверном формате.'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        if ($request['created_at'] == null) {
            $created_at = $repo->getCreatedAtById($id);
        } else {
            $created_at = $request['created_at'];
        }

        $pinned = $request['pinned'] == null ? false : true;

        $repo->update($id, [
                'views' => $request['views'],
                'created_at' => $created_at,
                'pinned' => $pinned
            ]);
        
        return redirect()
            ->route('admin.posts.edit_form', $id)
            ->with('message', 'Изменения сохранены.');
    }

    public function createTranslationForm(PostsRepo $repo, $locale, $post_id)
    {
        \Auth::user()->userIs('posts_admin');
        $slug_ru = $repo->getSlugByLocaleAndPostId('ru', $post_id);
        $slug_de = $repo->getSlugByLocaleAndPostId('de', $post_id);
        $slug_kg = $repo->getSlugByLocaleAndPostId('kg', $post_id);

        return view('posts.create_translation')
            ->with('slug_ru', $slug_ru)
            ->with('slug_de', $slug_de)
            ->with('slug_kg', $slug_kg)
            ->with('locale', $locale)
            ->with('post_id', $post_id);
    }

    public function createTranslation(Request $request, PostsRepo $repo, $locale, $post_id)
    {
        \Auth::user()->userIs('posts_admin');
        $rules = [
            'title' => 'required|max:191',
            'description' => 'max:255',
            'content' => 'required'
        ];
        $messages = [
            'title.required' => 'Заполните наименование записи.',
            'title.max' => 'Слишком длинное наименование записи.',
            'description.max' => 'Слишком длинное описание записи.',
            'content.reuiqred' => 'Заполните информацию о странице.'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        $slug = $repo->toSlug($request['title']) . '-' . $locale;

        $repo->createTranslation([
                'post_id' => $post_id,
                'locale' => $locale,
                'title' => $request['title'],
                'slug' => $slug,
                'description' => $request['description'],
                'content' => $request['content']
            ]);
        
        return redirect()
            ->route('admin.posts.edit_translation_form', $slug);
    }

    public function editTranslationForm(PostsRepo $repo, $slug)
    {
        \Auth::user()->userIs('posts_admin');
        $post = $repo->findTranslation($slug);

        $slug_ru = $repo->getSlugByLocaleAndPostId('ru', $post->post_id);
        $slug_de = $repo->getSlugByLocaleAndPostId('de', $post->post_id);
        $slug_kg = $repo->getSlugByLocaleAndPostId('kg', $post->post_id);
        
        return view('posts.edit_translation')
            ->with('post', $post)
            ->with('slug_ru', $slug_ru)
            ->with('slug_de', $slug_de)
            ->with('slug_kg', $slug_kg);
    }

    public function editTranslation(Request $request, PostsRepo $repo, $slug)
    {
        \Auth::user()->userIs('posts_admin');
        $rules = [
            'title' => 'required|max:191',
            'description' => 'max:255',
            'content' => 'required'
        ];
        $messages = [
            'title.required' => 'Заполните наименование записи.',
            'title.max' => 'Слишком длинное наименование записи.',
            'description.max' => 'Слишком длинное описание записи.',
            'content.reuiqred' => 'Заполните информацию о странице.'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        $locale = $repo->getLocaleBySlug($slug);  
        $new_slug = $repo->toSlug($request['title']) . '-' . $locale;

        $repo->updateTranslation($slug, [
                'title' => $request['title'],
                'slug' => $new_slug,
                'description' => $request['description'] == null ? '' : $request['description'],
                'content' => $request['content']
            ]);
        
        return redirect()
            ->route('admin.posts.edit_translation_form', $new_slug)
            ->with('message', 'Изменения сохранены');
    }

    public function delete(PostsRepo $repo, $post_id)
    {
        \Auth::user()->userIs('posts_admin');
        $repo->deleteTranslations($post_id);
        $repo->delete($post_id);

        return redirect()
            ->route('admin.posts', 'ru')
            ->with('message', 'Запись удалена.');
    }
}
