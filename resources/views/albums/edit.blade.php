@extends('layouts.admin_master')

@section('title', 'Редактирование альбома')

@section('content')
<div class="grey-row">
  <div class="container news height">
    <div class="row justify-content-lg-center justify-content-md-center">
      <div class="col-lg-9 col-md-9 white-background">
        <h4 class="main-color">Редактирование альбома</h4>
        <hr>
        @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session()->get('message') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.albums.edit', ['id' => $album->id]) }}">
          @include('layouts.errors')
          {{ csrf_field() }}

          <div class="form-group">
            <label for="views">Просмотры</label>
            <input type="number" class="form-control" name="views" id="views" value="{{ $album->views }}">
          </div>

          <div class="form-group">
            <label for="description">Дата добавления</label>
            <input type="date" class="form-control" name="created_at" id="created_at" value="{{ dateWithoutTime($album->created_at) }}">
          </div>

          @if(strlen($album->image) > 0)
          <div class="form-group">
            <label for="old_file">Старое фото</label>
             <img class="img-responsive album-image" src="{{ asset('images/gallery/albums') . '/' . $album->image }}" alt="">
          </div>
          @endif

          <div class="form-group">
            <label for="image">Загрузить фото</label>
            <input type="file" class="form-control-file" id="image" name="image">
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