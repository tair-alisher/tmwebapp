@extends('layouts.admin_master')

@section('title', 'Учебные проекты')

@section('content')
<div class="grey-row">
  <div class="container height">
    <div class="row">

      <div class="col-lg-3 col-md-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ route('admin.projects', 'ru') }}">На русском</a>
          </li>
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ route('admin.projects', 'de') }}">На немецком</a>
          </li>
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ route('admin.projects', 'kg') }}">На кыргызском</a>
          </li>
        </ul>
      </div>

      <div class="col-lg-9 col-md-9 white-background">
        <h4 class="main-color">Учебные проекты</h4>
        <hr>
        @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session()->get('message') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        <a href="{{ route('admin.projects.create_form', ['locale' => $locale]) }}" class="btn btn-link main-color">Добавить проект</a>

        <ul class="list-group">
          @foreach ($projects as $project)
          <li class="list-group-item">
            {{ $project->title }}<br>
            <a href="{{ route('admin.projects.edit_translation_form', $project->slug) }}" class="btn btn-link main-color">Редактировать</a>
            <span class="main-color">&#8726</span>
            <a onclick="return confirmPostDelete()" href="{{ route('admin.projects.delete', $project->id) }}" class="btn btn-link main-color">Удалить</a>
          </li>
          @endforeach
        </ul>
        <div class="pages">
          {{ $projects->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection