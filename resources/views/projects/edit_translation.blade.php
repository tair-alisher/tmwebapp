@extends('layouts.admin_master')

@section('title', 'Редактирование проекта')

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
            <a class="nav-link main-color" href="{{ empty($slug_ru) ? route('admin.projects.create_translation_form', ['locale' => 'ru',  'project_id' => $project->edu_project_id]) : route('admin.projects.edit_translation_form', ['slug' => $slug_ru]) }}">На русском</a>
          </li>
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ empty($slug_de) ? route('admin.projects.create_translation_form',  ['locale' => 'de',  'project_id' => $project->edu_project_id]) : route('admin.projects.edit_translation_form', ['slug' => $slug_de]) }}">На немецком</a>
          </li>
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ empty($slug_kg) ? route('admin.projects.create_translation_form',  ['locale' => 'kg',  'project_id' => $project->edu_project_id]) : route('admin.projects.edit_translation_form', ['slug' => $slug_kg]) }}">На кыргызском</a>
          </li>
        </ul>
      </div>


      <div class="col-lg-9 col-md-9 white-background">
        <h4 class="main-color">Редактирование проекта: {{ $project->title }}<br><b>{{ $project->locale }}</b></h4>
        <hr>
        <p class="text-center"><a href="{{ route('admin.projects.edit_form', $project->edu_project_id) }}" target="_blank" class="btn btn-link text-primary">Чтобы изменить <b>дату</b> или <b>количество просмотров</b>, нажмите здесь</a></p>
        <hr>
        <form action="{{ route('admin.projects.edit_translation', $project->slug) }}" method="POST">
          @include('layouts.errors')
          {{ csrf_field() }}

          <div class="form-group">
            <label for="title">Название</label>
            <input type="text" class="form-control" name="title" id="title" required="required" value="{{ $project->title }}">
          </div>

          <div class="form-group">
            <label for="content">Информация</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control" required="required">{!! $project->content !!}</textarea>
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