@extends('layouts.master')

@section('meta')
<meta name="description" content="{{ trans('menu.modules.title') }}. {{ trans('app.brand') }}">
<meta name="keywords" content="{{ trans('menu.modules.title') }}, {{ trans('app.brand') }}">
<meta name="robots" content="all" />
<meta http-equiv="content-language" content="{{ trans('app.lang') }}" />
@endsection

@section('title', trans('menu.modules.title'))

@section('content')
<div class="grey-row">
  <div class="container height">
    <div class="row">
      <div class="col-lg-12 col-md-12 white-background">
        <h4 class="title">{{ trans('menu.modules.title') }}</h4>
        <hr>

        @foreach ($files as $file)
        <div class="discipline-block">
          <p>{{ $file->title }} ({{ customDateFormat($file->created_at) }}) <a href="{{ asset('files/disciplines') . '/' . $file->file_title }}" class="btn btn-link" download>{{ trans('app.download') }}</a></p>
          
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection