@extends('layouts.admin_master')

@section('title', 'Изменение пароля')

@section('content')
<div class="grey-row">
  <div class="container height">
    <div class="row justify-content-lg-center justify-content-md-center">
      <div class="col-lg-6 col-md-6 white-background">
        <h4 class="main-color">Изменение пароля пользователя: {{ $user->name }}</h4>
        <hr>
        <form action="{{ route('admin.users.change_password', $user->id) }}" method="POST">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль" required="required">
          </div>

          <div class="form-group">
            <label for="password_confirmation">Повторите пароль</label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Повторите пароль" required="required">
          </div>

          <div class="form-group">
            <button class="btn btn-link main-color" type="submit">Сохранить</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection