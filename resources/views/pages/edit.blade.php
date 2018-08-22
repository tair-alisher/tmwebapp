@extends('layouts.admin_master')

@section('title', 'Редактирование страниц')

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
            <a class="nav-link main-color" href="{{ route('admin.pages.edit_form', $slug_ru) }}">На русском</a>
          </li>
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ route('admin.pages.edit_form', $slug_de) }}">На немецком</a>
          </li>
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ route('admin.pages.edit_form', $slug_kg) }}">На кыргызском</a>
          </li>
        </ul>
      </div>


      <div class="col-lg-9 col-md-9 white-background">
        <h4 class="title">Редактирование страницы: {{ $page->title }}</h4>
        <hr>
        @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session()->get('message') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        <form action="{{ route('admin.pages.edit', $page->slug) }}" method="POST">
          @include('layouts.errors')
          {{ csrf_field() }}
          <div class="form-group">
            <label for="content">Информация</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control" required="required">{!! $page->content !!}</textarea>
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