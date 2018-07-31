@extends('layouts.admin_master')

@section('title', 'Редактирование записи')

@section('styles')
  <link rel="stylesheet" href="{{ asset('js/summernote/summernote-bs4.css') }}">
@endsection

@section('content')
<div class="grey-row">
  <div class="container news height">
    <div class="row justify-content-lg-center justify-content-md-center">
      <div class="col-lg-9 col-md-9 white-background">
        <h4 class="main-color">Редактирование записи</h4>
        <hr>
        <form action="{{ route('admin.posts.general_edit', $post->id) }}" method="POST">
          @include('layouts.errors')
          {{ csrf_field() }}

          <div class="form-group">
            <label for="title">Просмотры</label>
            <input type="number" class="form-control" name="views" id="views" required="required" value="{{ $post->views }}">
          </div>

          <div class="form-group">
            <label for="description">Дата публикации</label>
            <input type="date" class="form-control" name="created_at" id="created_at" value="{{ dateWithoutTime($post->created_at) }}">
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="pinned" id="pinned"{{ $post->pinned ? ' checked' : '' }}>
            <label for="pinned" class="form-check-label">Закрепить</label>
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