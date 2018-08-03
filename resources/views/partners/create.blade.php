@extends('layouts.admin_master')

@section('title', 'Добавление')

@section('content')
<div class="grey-row">
  <div class="container news height">
    <div class="row justify-content-lg-center justify-content-md-center">

      <div class="col-lg-9 col-md-9 white-background">
        <h4 class="main-color">Добавление</h4>
        <hr>
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.partners.create') }}">
          @include('layouts.errors')
          {{ csrf_field() }}

          <div class="form-group">
            <label for="name">Название</label>
            <input type="text" class="form-control" name="name" id="name" required="required" placeholder="Введите название">
          </div>

          <div class="form-group">
            <label for="link">Ссылка на сайт (в формате: <b>http(s)://</b>ссылка)</label>
            <input type="text" class="form-control" name="link" id="link" placeholder="http(s)://">
          </div>

          <div class="form-group">
            <label for="file">Загрузить логотип</label>
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