@extends('layouts.master')

@section('title', 'Авторизация')

@section('content')
<div class="grey-row">
  <div class="container height">
    <div class="row justify-content-lg-center justify-content-md-center">
      <div class="col-lg-7 col-md-7 white-background">
        <h4 class="main-color">Авторизация</h4>
        <hr>
        <form action="{{ route('admin.login.check') }}" method="POST">
          @include('layouts.errors')
          {{ csrf_field() }}

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" aria-describedby="emailHelp" name="email" id="email" placeholder="Введите email" required="required">
          </div>

          <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль" required="required">
          </div>

          <div class="form-group">
            <button class="btn btn-link main-color" type="submit">Войти</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection