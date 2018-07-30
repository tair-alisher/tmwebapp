@extends('layouts.admin_master')

@section('title', 'Пользователи')

@section('content')
<div class="grey-row">
  <div class="container height">
    <div class="row justify-content-lg-center justify-content-md-center">
      <div class="col-lg-7 col-md-7 white-background">
        <h4 class="main-color">Пользователи</h4>
        <hr>
        <a href="{{ route('admin.register') }}" class="btn btn-link main-color">Добавить пользователя</a>

        <ul class="list-group">
          @foreach ($users as $user)
          <li class="list-group-item">
            {{ $user->name }}
            <a href="{{ route('admin.users.edit_form', $user->id) }}" class="btn btn-link main-color">Редактировать</a>
            <span class="main-color">&#8726</span>
            <a href="{{ route('admin.users.change_password_form', $user->id) }}" class="btn btn-link main-color">Сменить пароль</a>
            <span class="main-color">&#8726</span>
            <a onclick="return confirmAction()" href="{{ route('admin.users.delete', $user->id) }}" class="btn btn-link main-color">Удалить</a>
          </li>
        @endforeach
        </ul>
        <div class="pages">
          {{ $users->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection