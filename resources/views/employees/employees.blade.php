@extends('layouts.admin_master')

@section('title', 'Сотрудники')

@section('content')
<div class="grey-row">
  <div class="container height">
    <div class="row">

      <div class="col-lg-3 col-md-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ route('admin.employees', 'ru') }}">На русском</a>
          </li>
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ route('admin.employees', 'de') }}">На немецком</a>
          </li>
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ route('admin.employees', 'kg') }}">На кыргызском</a>
          </li>
        </ul>
      </div>

      <div class="col-lg-9 col-md-9 white-background">
        <h4 class="main-color">Сотрудники</h4>
        <hr>
        @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session()->get('message') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        <a href="{{ route('admin.employees.create_form', ['locale' => $locale]) }}" class="btn btn-link main-color">Добавить сотрудника</a>

        <ul class="list-group">
          @foreach ($employees as $employee)
          <li class="list-group-item">
            {{ $employee->name }}<br>
            <a href="{{ route('admin.employees.edit_translation_form', $employee->id) }}" class="btn btn-link main-color">Редактировать</a>
            <span class="main-color">&#8726</span>
            <a onclick="return confirmPostDelete()" href="{{ route('admin.employees.delete', ['employee_id' => $employee->employee_id]) }}" class="btn btn-link main-color">Удалить</a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection