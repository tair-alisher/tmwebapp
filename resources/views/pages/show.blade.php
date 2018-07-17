@extends('layouts.master')
@section('meta')
<meta name="description" content="{{ $page->title }}">
<meta name="keywords" content="{{ $page->title }}">
<meta name="robots" content="all">
<meta http-equiv="content-language" content="{{ trans('app.lang') }}">
@endsection

@section('title', $page->title)

@section('content')
  <div class="grey-row">
    <div class="container height more-block">
      <div class="info">
        {!! $page->content !!}
      </div>
    </div>
  </div>
@endsection