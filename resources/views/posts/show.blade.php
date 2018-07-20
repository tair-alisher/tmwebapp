@extends('layouts.master')

@section('content')
<div class="grey-row">
  <div class="container height">
    <div class="news">
      <div class="row">
        
        <div class="col-lg-9 col-md-9 order-first order-md-first order-sm-last order-xs-last news-block">
          <h4 class="show-news-title">{{ $post->title }}</h4>
          <span class="one-news-info">Дата: {{ $post->created_at->format('d.m.Y') }}</span>
          <span class="one-news-info">Просмотров: {{ $post->views }}</span>

          <div class="news-content-block">

            <div class="panel-body">
              {!! $post->content !!}
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 order-last order-md-last order-sm-first order-xs-first pinned-news">
            <h4 class="title">{{ trans('app.info.pinned') }}</h4>
            <hr>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection