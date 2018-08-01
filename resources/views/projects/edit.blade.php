@extends('layouts.admin_master')

@section('title', 'Редактирование проекта')

@section('styles')
  <link rel="stylesheet" href="{{ asset('js/summernote/summernote-bs4.css') }}">
@endsection

@section('content')
<div class="grey-row">
  <div class="container news height">
    <div class="row justify-content-lg-center justify-content-md-center">
      <div class="col-lg-9 col-md-9 white-background">
        <h4 class="main-color">Редактирование проекта</h4>
        <hr>
        <form action="{{ route('admin.projects.edit', $project->id) }}" method="POST">
          @include('layouts.errors')
          {{ csrf_field() }}

          <div class="form-group">
            <label for="title">Просмотры</label>
            <input type="number" class="form-control" name="views" id="views" required="required" value="{{ $project->views }}">
          </div>

          <div class="form-group">
            <label for="description">Дата публикации</label>
            <input type="date" class="form-control" name="created_at" id="created_at" value="{{ dateWithoutTime($project->created_at) }}">
          </div>
          <br>
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