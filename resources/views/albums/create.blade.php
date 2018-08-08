@extends('layouts.admin_master')

@section('title', 'Добавление альбома')

@section('content')
<div class="grey-row">
  <div class="container news height">
    <div class="row justify-content-lg-center justify-content-md-center">

      <div class="col-lg-9 col-md-9 white-background">
        <h4 class="main-color">Добавление альбома</h4>
        <hr>
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.albums.create') }}">
          @include('layouts.errors')
          {{ csrf_field() }}

          <div class="form-group">
            <label for="title">Название (на русском)</label>
            <input type="text" class="form-control" name="title" id="title" required="required" placeholder="Введите название альбома на русском">
          </div>

          <div class="form-group">
            <label for="image">Загрузить обложку альбома (изображение)</label>
            <input type="file" class="form-control-file" id="image" name="image">
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