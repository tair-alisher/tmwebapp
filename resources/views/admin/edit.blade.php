@extends('layouts.admin_master')

@section('title', 'Редактирование пользователя')

@section('content')
<div class="grey-row">
  <div class="container height">
    <div class="row justify-content-lg-center justify-content-md-center">
      <div class="col-lg-6 col-md-6 white-background">
        <h4 class="main-color">Редактирование пользователя</h4>
        <hr>
        @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session()->get('message') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        <form action="{{ route('admin.users.edit', $user->id) }}" method="POST">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" class="form-control" name="name" id="name" required="required" value="{{ $user->name }}">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" required="required" value="{{ $user->email }}">
          </div>

          <div class="form-group">
          @foreach ($roles as $role)
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="roles[]" value="{{ $role->id }}" id="role-{{ $role->id }}" {{ $user->hasRole($role->name) ? ' checked' : '' }}>
              <label class="form-check-label" for="role-{{ $role->id }}">
                {{ $role->description }}
              </label>
            </div>
          @endforeach
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