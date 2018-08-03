@extends('layouts.admin_master')

@section('title', 'Редактирование записи')

@section('content')
<div class="grey-row">
  <div class="container news height">
    <div class="row justify-content-lg-center justify-content-md-center">
      <div class="col-lg-9 col-md-9 white-background">
        <h4 class="main-color">Редактирование записи</h4>
        <hr>
        <form action="{{ route('admin.disciplines.edit', $discipline->id) }}" method="POST">
          @include('layouts.errors')
          {{ csrf_field() }}

          <div class="form-group">
            <label for="description">Дата публикации</label>
            <input type="date" class="form-control" name="created_at" id="created_at" value="{{ dateWithoutTime($discipline->created_at) }}">
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