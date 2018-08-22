@extends('layouts.admin_master')

@section('title', 'Добавление записи')

@section('content')
<div class="grey-row">
  <div class="container news height">
    <div class="row justify-content-lg-center justify-content-md-center">

      <div class="col-lg-9 col-md-9 white-background">
        <h4 class="main-color">Добавление записи<br><b>{{ $locale }}</b></h4>
        <hr>
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.disciplines.create', ['locale' => $locale]) }}">
          @include('layouts.errors')
          {{ csrf_field() }}

          <div class="form-group">
            <label for="title">Название</label>
            <input type="text" class="form-control" name="title" id="title" required="required" placeholder="Введите название">
          </div>

          <div class="form-group">
            <label for="file">Загрузить файл</label>
            <input type="file" class="form-control-file" id="file" name="file">
          </div>

          <div class="form-group">
            <button class="btn btn-outline-primary" type="submit">Создать</button>
          </div>
        </form>
      </div>   
    </div>
    
  </div>
</div>
@endsection