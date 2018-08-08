@extends('layouts.admin_master')

@section('title', 'Редактирование сотрудника')

@section('styles')
  <link rel="stylesheet" href="{{ asset('js/summernote/summernote-bs4.css') }}">
@endsection

@section('content')
<div class="grey-row">
  <div class="container news height">
    <div class="row">

      <div class="col-lg-3 col-md-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ empty($translation_ru) ? route('admin.employees.create_translation_form', ['locale' => 'ru',  'employee_id' => $employee->employee_id]) : route('admin.employees.edit_translation_form', ['translation_id' => $translation_ru]) }}">На русском</a>
          </li>
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ empty($translation_de) ? route('admin.employees.create_translation_form',  ['locale' => 'de',  'employee_id' => $employee->employee_id]) : route('admin.employees.edit_translation_form', ['translation_id' => $translation_de]) }}">На немецком</a>
          </li>
          <li class="nav-item">
            <a class="nav-link main-color" href="{{ empty($translation_kg) ? route('admin.employees.create_translation_form',  ['locale' => 'kg',  'employee_id' => $employee->employee_id]) : route('admin.employees.edit_translation_form', ['translation_id' => $translation_kg]) }}">На кыргызском</a>
          </li>
        </ul>
      </div>


      <div class="col-lg-9 col-md-9 white-background">
        <h4 class="main-color">Редактирование сотрудника: {{ $employee->name }}<br><b>{{ $employee->locale }}</b></h4>
        <hr>
        <p class="text-center"><a href="{{ route('admin.employees.edit_form', $employee->employee_id) }}" target="_blank" class="btn btn-link text-primary">Чтобы изменить <b>email</b>, <b>фото</b>, или <b>дату создания</b>, нажмите здесь <span class="oi oi-external-link"></span></a></p>
        <hr>
        <form action="{{ route('admin.employees.edit_translation', $employee->id) }}" method="POST">
          @include('layouts.errors')
          {{ csrf_field() }}

          <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" class="form-control" name="name" id="name" required="required" value="{{ $employee->name }}">
          </div>

          <div class="form-group">
            <label for="position">Должность</label>
            <input type="text" class="form-control" name="position" id="position" required="required" value="{{ $employee->position }}">
          </div>

          <div class="form-group">
            <label for="degree">Степень (звание) (не обязательно)</label>
            <input type="text" class="form-control" name="degree" id="degree" value="{{ $employee->degree }}">
          </div>

          <div class="form-group">
            <label for="info">Информация</label>
            <textarea name="info" id="info" cols="30" rows="10" class="form-control" required="required">{!! $employee->info !!}</textarea>
          </div>

          <div class="form-group">
            <button class="btn btn-outline-primary" type="submit">Сохранить</button>
          </div>
        </form>
      </div>   
    </div>
    
  </div>
</div>
@endsection

@section('scripts')

<script src="{{ asset('js/summernote/summernote-bs4.js') }}"></script>
<script>
  $(document).ready(function() {
    $('#info').summernote();
  });
</script>
@endsection