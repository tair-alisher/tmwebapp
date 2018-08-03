@extends('layouts.admin_master')

@section('title', 'Партнеры')

@section('content')
<div class="grey-row">
  <div class="container height">
    <div class="row justify-content-lg-center justify-content-md-center">

      <div class="col-lg-9 col-md-9 white-background">
        <h4 class="main-color">Партнеры</h4>
        <hr>
        <a href="{{ route('admin.partners.create_form') }}" class="btn btn-link main-color">Добавить</a>

        <ul class="list-group">
          @foreach ($partners as $partner)
          <li class="list-group-item">
            {{ $partner->name }}<br>
            <a href="{{ route('admin.partners.edit_form', $partner->id) }}" class="btn btn-link main-color">Редактировать</a>
            <span class="main-color">&#8726</span>
            <a onclick="return confirmAction()" href="{{ route('admin.partners.delete', $partner->id) }}" class="btn btn-link main-color">Удалить</a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection