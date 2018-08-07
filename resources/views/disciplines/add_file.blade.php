@extends('layouts.admin_master')

@section('title', 'Добавление файла')

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
            <a class="nav-link main-color" href="{{ empty($file_id_ru) ? route('admin.disciplines.add_file_form', ['locale' => 'ru',  'discipline_id' => $discipline_id]) : route('admin.disciplines.edit_file_form', $file_id_ru) }}">На русском</a>
          </li>
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ empty($file_id_de) ? route('admin.disciplines.add_file_form', ['locale' => 'de',  'discipline_id' => $discipline_id]) : route('admin.disciplines.edit_file_form', $file_id_de) }}">На немецком</a>
          </li>
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ empty($file_id_kg) ? route('admin.disciplines.add_file_form', ['locale' => 'kg',  'discipline_id' => $discipline_id]) : route('admin.disciplines.edit_file_form', $file_id_kg) }}">На кыргызском</a>
          </li>
        </ul>
      </div>


      <div class="col-lg-9 col-md-9 white-background">
        <h4 class="main-color">Добавление файла<br><b>{{ $locale }}</b></h4>
        <hr>
        <p class="text-center"><a href="{{ route('admin.disciplines.edit_form', ['discipline_id' => $discipline_id]) }}" target="_blank" class="btn btn-link text-primary">Чтобы изменить <b>дату</b>, нажмите здесь <span class="oi oi-external-link"></span></a></p>
        <hr>
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.disciplines.add_file', ['locale' => $locale, 'discipline_id' => $discipline_id]) }}">
          @include('layouts.errors')
          {{ csrf_field() }}

          <div class="form-group">
            <label for="title">Название</label>
            <input type="text" class="form-control" name="title" id="title" required="required" placeholder="Введите название">
          </div>

          <div class="form-group">
            <label for="file">Загрузить другой файл</label>
            <input type="file" class="form-control-file" id="file" name="file">
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