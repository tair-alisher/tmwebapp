@extends('layouts.admin_master')

@section('title', 'Альбомы')

@section('content')
<div class="grey-row">
  <div class="container height">
    <div class="row justify-content-lg-center justify-content-md-center">
      <div class="col-lg-9 col-md-9 white-background">
        <h4 class="main-color">Альбомы</h4>
        <hr>
        @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session()->get('message') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        <a href="{{ route('admin.albums.create_form') }}" class="btn btn-link main-color">Добавить альбом</a>

        <ul class="list-group">
          @foreach ($albums as $album)
          <li class="list-group-item">
            {{ $album->title }}<br>
            <a href="{{ route('admin.albums.edit_translation_form', $album->id) }}" class="btn btn-link main-color">Редактировать</a>
            <span class="main-color">&#8726</span>
            <a href="{{ route('admin.images', $album->album_id) }}" class="btn btn-link main-color">Изображения</a>
            <span class="main-color">&#8726</span>
            <a onclick="return confirmAlbumDelete()" href="{{ route('admin.albums.delete', $album->album_id) }}" class="btn btn-link main-color">Удалить</a>
          </li>
        @endforeach
        </ul>
        <div class="pages">
          {{ $albums->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection