@extends('layouts.master')

@section('content')
<div class="grey-row">
  <div class="container news">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-push-9">
      <h4 class="title">{{ trans('app.info.pinned') }}</h4>
      <hr>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-pull-3">
        <h4 class="title">{{ trans('app.info.news') }}</h4>
        @foreach ($posts as $post)
        <div class="col-lg-12 col-md-12 news-block">
          <p class="panel panel-default">
            <p class="panel-heading">
              <a href="{{ route('news.show', $post->slug) }}">{{ $post->title }}</a>
            </p>
            <span class="news-info">Дата: {{ $post->created_at->format('d.m.Y') }}</span>
            <span class="news-info">Просмотры: {{ $post->views }}</span>
            <p class="panel-footer text-right">
              <a href="{{ route('news.show', $post->slug) }}">
                {{ trans('app.view_more') }}
              </a>
            </p>
          </p>
        </div>
        @endforeach()
      </div>
    </div>
  </div>
</div>
@endsection