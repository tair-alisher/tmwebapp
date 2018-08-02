@extends('layouts.admin_master')

@section('title', 'Новости')

@section('content')
<div class="grey-row">
  <div class="container height">
    <div class="row">

      <div class="col-lg-3 col-md-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ route('admin.posts', 'ru') }}">На русском</a>
          </li>
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ route('admin.posts', 'de') }}">На немецком</a>
          </li>
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ route('admin.posts', 'kg') }}">На кыргызском</a>
          </li>
        </ul>
      </div>

      <div class="col-lg-9 col-md-9 white-background">
        <h4 class="main-color">Новости</h4>
        <hr>
        <a href="{{ route('admin.posts.create_form', ['locale' => $locale]) }}" class="btn btn-link main-color">Добавить запись</a>

        <ul class="list-group">
          @foreach ($posts as $post)
          <li class="list-group-item">
            {{ $post->title }}<br>
            <a href="{{ route('admin.posts.edit_translation_form', $post->slug) }}" class="btn btn-link main-color">Редактировать</a>
            <span class="main-color">&#8726</span>
            <a onclick="return confirmPostDelete()" href="{{ route('admin.posts.delete', $post->id) }}" class="btn btn-link main-color">Удалить</a>
          </li>
          @endforeach
        </ul>
        <div class="pages">
          {{ $posts->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection