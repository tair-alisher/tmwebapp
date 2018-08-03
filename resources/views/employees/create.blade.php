@extends('layouts.admin_master')

@section('title', 'Добавление сотрудника')

@section('content')
<div class="grey-row">
  <div class="container news height">
    <div class="row justify-content-lg-center justify-content-md-center">

      <div class="col-lg-9 col-md-9 white-background">
        <h4 class="main-color">Добавление сотрудника<br><b>{{ $locale }}</b></h4>
        <hr>
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.employees.create', ['locale' => $locale]) }}">
          @include('layouts.errors')
          {{ csrf_field() }}

          <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" class="form-control" name="name" id="name" required="required" placeholder="Введите имя сотрудника">
          </div>

          <div class="form-group">
            <label for="position">Позиция</label>
            <input type="text" class="form-control" name="position" id="position" required="required" placeholder="Введите должность">
          </div>

          <div class="form-group">
            <label for="degree">Степень сотрудника (не обязательно)</label>
            <input type="text" class="form-control" name="degree" id="degree" placeholder="Введите степень сотрудника">
          </div>

          <div class="form-group">
            <label for="email">Email адрес</label>
            <input type="email" class="form-control" name="email" id="email" required="required" placeholder="Введите email адрес">
          </div>

          <div class="form-group">
            <label for="image">Загрузить файл</label>
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