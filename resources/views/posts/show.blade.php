@extends('layouts.master')
@section('meta')
<meta name="description" content="{{ $post->title }}">
<meta name="keywords" content="{{ $post->title }}">
<meta name="robots" content="all" />
<meta http-equiv="content-language" content="{{ trans('app.lang') }}" />
@endsection

@section('title', $post->title)

@section('content')
<div class="grey-row">
  <div class="container height">
    <div class="news">
      <div class="row">

        <div class="col-lg-3 col-md-3 order-lg-last order-md-last pinned-news">
          <h4 class="title">{{ trans('app.info.pinned') }}</h4>
          <hr>
        </div>

        <div class="col-lg-9 col-md-9 news-block">
          <h4 class="title">{{ $post->title }}</h4>
          <span class="one-news-info">{{ trans('app.date') }}: {{ $post->created_at->format('d.m.Y') }}</span>
          <span class="one-news-info">{{ trans('app.views') }}: {{ $post->views }}</span>

          <div class="news-content-block">

            <div class="panel-body">
              {!! $post->content !!}
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection