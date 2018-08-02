@extends('layouts.admin_master')

@section('title', 'Модули дисциплин')

@section('content')
<div class="grey-row">
  <div class="container height">
    <div class="row">

      <div class="col-lg-3 col-md-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ route('admin.disciplines', 'ru') }}">На русском</a>
          </li>
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ route('admin.disciplines', 'de') }}">На немецком</a>
          </li>
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ route('admin.disciplines', 'kg') }}">На кыргызском</a>
          </li>
        </ul>
      </div>

      <div class="col-lg-9 col-md-9 white-background">
        <h4 class="main-color">Модули дисциплин</h4>
        <hr>
        <a href="{{ route('admin.projects.create_form', ['locale' => $locale]) }}" class="btn btn-link main-color">Добавить файл</a>

        <ul class="list-group">
          @foreach ($files as $file)
          <li class="list-group-item">
            {{ $file->title }}<br>
            <a href="{{ route('admin.disciplines.edit_file_form', $file->file_id) }}" class="btn btn-link main-color">Редактировать</a>
            <span class="main-color">&#8726</span>
            <a onclick="return confirmPostDelete()" href="{{ route('admin.projects.delete', $file->discipline_id) }}" class="btn btn-link main-color">Удалить</a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection