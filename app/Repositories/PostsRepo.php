<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Post;

class PostsRepo
{
  public function getPostById($id)
  {
    return DB::table('posts')
      ->where('id', $id)
      ->first();
  }

  public function getPostTranslationBySlug($slug)
  {
    return DB::table('post_translations')
      ->where('slug', $slug)
      ->first();
  }

  public function getSlugByLocaleAndPostId($locale, $post_id)
  {
    return DB::table('post_translations')
      ->where('post_id', $post_id)
      ->where('locale', $locale)
      ->value('slug');
  }

  public function getCreatedAtById($id)
  {
    return DB::table('posts')
      ->where('id', $id)
      ->value('created_at');
  }

  public function createPostTranslation($data)
  {
    DB::table('post_translations')
      ->insert($data);
  }

  public function updatePost($id, $data)
  {
    DB::table('posts')
      ->where('id', $id)
      ->update($data);
  }

  public function updatePostTranslation($slug, $data)
  {
    DB::table('post_translations')
      ->where('slug', $slug)
      ->update($data);
  }

  public function getLocaleBySlug($slug)
  {
    return DB::table('post_translations')
      ->where('slug', $slug)
      ->value('locale');
  }

  public function getPostsWithRelationsByLocale($locale)
  {
    return DB::table('post_translations')
      ->join('posts', 'post_translations.post_id', '=', 'posts.id')
      ->where('post_translations.locale', $locale)
      ->orderBy('posts.created_at', 'desc');
  }
}