@extends('layouts.admin_master')

@section('title', 'Создание страницы')

@section('styles')
  <link rel="stylesheet" href="{{ asset('js/summernote/summernote-bs4.css') }}">
@endsection

@section('content')
<div class="grey-row">
  <div class="container news height">
    <div class="row justify-content-lg-center justify-content-md-center">

      <div class="col-lg-9 col-md-9 white-background">
        <h4 class="main-color">Создание страницы<br><b>{{ $locale }}</b></h4>
        <hr>
        <form action="{{ route('admin.posts.add_post', ['locale' => $locale]) }}" method="POST">
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
            <button class="btn btn-link main-color" type="submit">Создать</button>
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