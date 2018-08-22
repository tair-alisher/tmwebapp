@extends('layouts.admin_master')

@section('title', 'Создание записи')

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
            <a class="nav-link main-color" href="{{ empty($slug_ru) ? route('admin.posts.create_translation_form', ['locale' => 'ru',  'post_id' => $post_id]) : route('admin.posts.edit_translation_form', $slug_ru) }}">На русском</a>
          </li>
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ empty($slug_de) ? route('admin.posts.create_translation_form', ['locale' => 'de',  'post_id' => $post_id]) : route('admin.posts.edit_translation_form', $slug_de) }}">На немецком</a>
          </li>
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ empty($slug_kg) ? route('admin.posts.create_translation_form', ['locale' => 'kg',  'post_id' => $post_id]) : route('admin.posts.edit_translation_form', $slug_kg) }}">На кыргызском</a>
          </li>
        </ul>
      </div>


      <div class="col-lg-9 col-md-9 white-background">
        <h4 class="main-color">Создание записи<br><b>{{ $locale }}</b></h4>
        <hr>
        <p class="text-center"><a href="{{ route('admin.posts.edit_form', $post_id) }}" target="_blank" class="btn btn-link text-primary">Чтобы изменить <b>дату</b>, <b>количество просмотров</b>, <b>закрепить&#8726открепить</b> запись, нажмите здесь <span class="oi oi-external-link"></span></a></p>
        <hr>
        <form action="{{ route('admin.posts.create_translation', ['locale' => $locale, 'post_id' => $post_id]) }}" method="POST">
          @include('layouts.errors')
          {{ csrf_field() }}

          <div class="form-group">
            <label for="title">Название</label>
            <input type="text" class="form-control" name="title" id="title" required="required" placeholder="Введите название">
          </div>

          <div class="form-group">
            <label for="description">Описание</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Введите описание">
          </div>

          <div class="form-group">
            <label for="content">Содержимое страницы</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control" required="required"></textarea>
          </div>

          <div class="form-group">
            <button class="btn btn-link main-color" type="submit">Сохранить</button>
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
    initEditorWithImageUploading();
  });
</script>
@endsection