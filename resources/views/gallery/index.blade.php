@extends('layouts.master')

@section('meta')
<meta name="description" content="{{ trans('app.info.gallery') }}. {{ trans('app.brand') }}">
<meta name="keywords" content="{{ trans('app.info.gallery') }}, {{ trans('app.brand') }}">
<meta name="robots" content="all" />
<meta http-equiv="content-language" content="{{ trans('app.lang') }}" />
@endsection

@section('title', trans('app.info.gallery'))

@section('content')
<div class="grey-row">
  <div class="container height">
    <div class="row">
      <div class="col-lg-12 col-md-12 white-background">
        <h4 class="title">{{ trans('app.info.gallery') }}</h4>
        <hr>
        @foreach ($albums as $album)
        <div class="album-block">
          <img src="{{ asset('images/gallery') }}" alt="">
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection