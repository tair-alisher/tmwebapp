@extends('layouts.admin_master')

@section('title', trans('app.register'))

@section('content')
<div class="grey-row">
  <div class="container height">
    <div class="row justify-content-lg-center justify-content-md-center">
      <div class="col-lg-7 col-md-7 white-background">
        <h4 class="main-color">{{ trans('app.register') }}</h4>
        <hr>
        <form action="{{ route('admin.register.check') }}" method="POST">
          @include('layouts.errors')
          {{ csrf_field() }}

          <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя" required="required" autofocus>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" aria-describedby="emailHelp" name="email" id="email" placeholder="Введите email" required="required">
          </div>

          <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль" required="required">
          </div>

          <div class="form-group">
              <label for="password_confirmation">Повторите пароль</label>
              <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Повторите пароль" required="required">
            </div>

          <div class="form-group">
            <button class="btn btn-link main-color" type="submit">Зарегистрировать</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection