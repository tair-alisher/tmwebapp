@extends('layouts.admin_master')

@section('title', 'Редактирование сотрудника')

@section('content')
<div class="grey-row">
  <div class="container news height">
    <div class="row justify-content-lg-center justify-content-md-center">
      <div class="col-lg-9 col-md-9 white-background">
        <h4 class="main-color">Редактирование сотрудника</h4>
        <hr>
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.employees.edit', ['employee_id' => $employee->id]) }}">
          @include('layouts.errors')
          {{ csrf_field() }}

          <div class="form-group">
            <label for="email">Email адрес</label>
            <input type="text" class="form-control" name="email" id="email" value="{{ $employee->email }}">
          </div>

          <div class="form-group">
            <label for="description">Дата добавления</label>
            <input type="date" class="form-control" name="created_at" id="created_at" value="{{ dateWithoutTime($employee->created_at) }}">
          </div>

          @if(strlen($employee->image) > 0 && $employee->image != 'default.png')
          <div class="form-group">
            <label for="old_file">Старое фото</label>
             <img class="img-responsive employee-image" src="{{ asset('images/employees') . '/' . $employee->image }}" alt="">
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