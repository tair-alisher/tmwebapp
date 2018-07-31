<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostsRepo;
use App\Post;
use Validator;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->paginate(6);

        $archives = Post::getArchives();
        $pinned_posts = Post::pinnedPosts();

        return view('posts.index', compact('posts', 'pinned_posts', 'archives'));
    }

    public function show($slug)
    {
        $post = Post::whereTranslation('slug', $slug)
            ->firstOrFail();
        
        if (!$post->slug) {
            abort(404);
        }

        $pinned_posts = Post::pinnedPosts();

        if ( $post->translate()->where('slug', $slug)->first()->locale != app()->getLocale() ) {
            return redirect()->route('news.show', $post->translate()->slug);
        }
        return view('posts.show')
            ->with('post', $post)
            ->with('pinned_posts', $pinned_posts);
    }

    public function posts(PostsRepo $repo, $locale)
    {
        $posts = $repo
            ->getPostsWithRelationsByLocale($locale)
            ->paginate(10);

        return view('posts.posts')
            ->with('posts', $posts);
    }

    public function editForm(PostsRepo $repo, $slug)
    {
        $post = $repo->getPostTranslationBySlug($slug);

        $slug_ru = $repo->getSlugByLocaleAndPostId('ru', $post->post_id);
        $slug_de = $repo->getSlugByLocaleAndPostId('de', $post->post_id);
        $slug_kg = $repo->getSlugByLocaleAndPostId('kg', $post->post_id);
        
        return view('posts.edit')
            ->with('post', $post)
            ->with('slug_ru', $slug_ru)
            ->with('slug_de', $slug_de)
            ->with('slug_kg', $slug_kg);
    }

    public function edit(Request $request, PostsRepo $repo, $slug)
    {
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
        
        $new_slug = Post::toSlug($request['title']) . '-' . $locale;

        $repo->updatePostTranslation($slug, [
                'title' => $request['title'],
                'slug' => $new_slug,
                'description' => $request['description'] == null ? '' : $request['description'],
                'content' => $request['content']
            ]);
        
        return redirect()
            ->route('admin.posts.edit_form', $new_slug);
    }

    public function createForm(PostsRepo $repo, $locale, $post_id)
    {
        
        $slug_ru = $repo->getSlugByLocaleAndPostId('ru', $post_id);
        $slug_de = $repo->getSlugByLocaleAndPostId('de', $post_id);
        $slug_kg = $repo->getSlugByLocaleAndPostId('kg', $post_id);

        return view('posts.create')
            ->with('slug_ru', $slug_ru)
            ->with('slug_de', $slug_de)
            ->with('slug_kg', $slug_kg)
            ->with('locale', $locale)
            ->with('post_id', $post_id);
    }

    public function create(Request $request, PostsRepo $repo, $locale, $post_id)
    {
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

        $slug = Post::toSlug($request['title']) . '-' . $locale;

        $repo->createPostTranslation([
                'post_id' => $post_id,
                'locale' => $locale,
                'title' => $request['title'],
                'slug' => $slug,
                'description' => $request['description'],
                'content' => $request['content']
            ]);
        
        return redirect()
            ->route('admin.posts.edit_form', $slug);
    }

    public function generalEditForm(PostsRepo $repo, $id)
    {
        $post = $repo->getPostById($id);
        
        return view('posts.general_edit')
            ->with('post', $post);
    }

    public function generalEdit(Request $request, PostsRepo $repo, $id)
    {
        $rules = [
            'views' => 'required|numeric',
            'created_at' => 'date'
        ];
        $messages = [
            'views.required' => 'Поле "Просмотры" обязательно для заполнения.',
            'views.numeric' => 'Поле "Просмотры" должно содержать числовое значение.',
            'created_at.date' => 'Дата указана в неверном формате.'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        if ($request['created_at'] == null) {
            $created_at = $repo->getCreatedAtById($id);
        } else {
            $created_at = $request['created_at'];
        }

        $pinned = $request['pinned'] == null ? false : true;

        $repo->updatePost($id, [
                'views' => $request['views'],
                'created_at' => $created_at,
                'pinned' => $pinned
            ]);
        
        return redirect()
            ->route('admin.posts.general_edit_form', $id);
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()
            ->route('admin.posts', 'ru');
    }
}
