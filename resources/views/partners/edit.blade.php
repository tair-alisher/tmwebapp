@extends('layouts.admin_master')

@section('title', 'Редактирование')

@section('content')
<div class="grey-row">
  <div class="container news height">
    <div class="row justify-content-lg-center justify-content-md-center">

      <div class="col-lg-9 col-md-9 white-background">
        <h4 class="main-color">Редактирование: {{ $partner->name }}</h4>
        <hr>
        
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.partners.edit', $partner->id) }}">
          @include('layouts.errors')
          {{ csrf_field() }}

          <div class="form-group">
            <label for="name">Название</label>
            <input type="text" class="form-control" name="name" id="name" required="required" value="{{ $partner->name }}">
          </div>

          <div class="form-group">
            <label for="link">Ссылка на сайт (в формате: <b>http(s)://</b>ссылка) (не обязательно)</label>
            <input type="text" class="form-control" name="link" id="link"{{ strlen($partner->link) > 0 ? ' value='. $partner->link : '' }}>
          </div>

          @if (strlen($partner->image) > 0)
          <div class="form-group">
            <label for="old_file">Старый логотип</label>
             <img src="{{ asset('images/partners') }}/{{ $partner->image }}" alt="" class="partner-image">
          </div>
          @endif

          <div class="form-group">
            <label for="image">Загрузить другой логотип</label>
            <input type="file" class="form-control-file" id="image" name="image">
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