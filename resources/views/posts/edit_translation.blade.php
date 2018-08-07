@extends('layouts.admin_master')

@section('title', 'Редактирование записи')

@section('styles')
  <link rel="stylesheet" href="{{ asset('js/summernote/summernote-bs4.css') }}">
@endsection

@section('content')
<div class="grey-row">
  <div class="container news height">
    <div class="row">

      <div class="col-lg-3 col-md-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ empty($slug_ru) ? route('admin.posts.create_translation_form', ['locale' => 'ru',  'post_id' => $post->post_id]) : route('admin.posts.edit_translation_form', $slug_ru) }}">На русском</a>
          </li>
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ empty($slug_de) ? route('admin.posts.create_translation_form',  ['locale' => 'de',  'post_id' => $post->post_id]) : route('admin.posts.edit_translation_form', $slug_de) }}">На немецком</a>
          </li>
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ empty($slug_kg) ? route('admin.posts.create_translation_form',  ['locale' => 'kg',  'post_id' => $post->post_id]) : route('admin.posts.edit_translation_form', $slug_kg) }}">На кыргызском</a>
          </li>
        </ul>
      </div>


      <div class="col-lg-9 col-md-9 white-background">
        <h4 class="main-color">Редактирование записи: {{ $post->title }}<br><b>{{ $post->locale }}</b></h4>
        <hr>
        <p class="text-center"><a href="{{ route('admin.posts.edit_form', $post->post_id) }}" target="_blank" class="btn btn-link text-primary">Чтобы изменить <b>дату</b>, <b>количество просмотров</b>, <b>закрепить&#8726открепить</b> запись, нажмите здесь <span class="oi oi-external-link"></span></a></p>
        <hr>
        <form action="{{ route('admin.posts.edit_translation', $post->slug) }}" method="POST">
          @include('layouts.errors')
          {{ csrf_field() }}

          <div class="form-group">
            <label for="title">Название</label>
            <input type="text" class="form-control" name="title" id="title" required="required" value="{{ $post->title }}">
          </div>

          <div class="form-group">
            <label for="description">Описание</label>
            <input type="text" class="form-control" name="description" id="description" value="{{ $post->description }}">
          </div>

          <div class="form-group">
            <label for="content">Информация</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control" required="required">{!! $post->content !!}</textarea>
          </div>

          <div class="form-group">
            <button class="btn btn-outline-primary" type="submit">Сохранить</button>
          </div>
        </form>
      </div>   
    </div>
    
  </div>
</div>
@endsection

@section('scripts')

<script src="{{ asset('js/summernote/summernote-bs4.js') }}"></script>
<script>
  $(document).ready(function() {
    $('#content').summernote();
  });
</script>
@endsection