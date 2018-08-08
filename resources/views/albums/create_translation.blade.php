@extends('layouts.admin_master')

@section('title', 'Добавление альбома')

@section('content')
<div class="grey-row">
  <div class="container news height">
    <div class="row">

      <div class="col-lg-3 col-md-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ empty($translation_ru) ? route('admin.albums.create_translation_form', ['locale' => 'ru',  'album_id' => $album_id]) : route('admin.albums.edit_translation_form', $translation_ru) }}">На русском</a>
          </li>
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ empty($translation_de) ? route('admin.albums.create_translation_form', ['locale' => 'de',  'album_id' => $album_id]) : route('admin.albums.edit_translation_form', $translation_de) }}">На немецком</a>
          </li>
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ empty($translation_kg) ? route('admin.albums.create_translation_form', ['locale' => 'kg',  'album_id' => $album_id]) : route('admin.albums.edit_translation_form', $translation_kg) }}">На кыргызском</a>
          </li>
        </ul>
      </div>


      <div class="col-lg-9 col-md-9 white-background">
        <h4 class="main-color">Добавление альбома<br><b>{{ $locale }}</b></h4>
        <hr>
        <p class="text-center"><a href="{{ route('admin.albums.edit_form', $album_id) }}" target="_blank" class="btn btn-link text-primary">Чтобы изменить <b>обложку</b>, <b>дату создания</b>, или <b>количество просмотров</b>, нажмите здесь <span class="oi oi-external-link"></span></a></p>
        <hr>
        <form action="{{ route('admin.albums.create_translation', ['locale' => $locale, 'album_id' => $album_id]) }}" method="POST">
          @include('layouts.errors')
          {{ csrf_field() }}

          <div class="form-group">
            <label for="title">Название ({{ $locale }})</label>
            <input type="text" class="form-control" name="title" id="title" required="required" placeholder="Введите название альбома">
          </div>

          <div class="form-group">
            <button class="btn btn-outline-primary" type="submit">Добавить</button>
          </div>
        </form>
      </div>   
    </div>
    
  </div>
</div>
@endsection