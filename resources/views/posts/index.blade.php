@extends('layouts.master')

@section('meta')
<meta name="description" content="{{ trans('meta.description') }}">
<meta name="keywords" content="{{ trans('meta.keywords') }}">
<meta name="robots" content="all" />
<meta http-equiv="content-language" content="{{ trans('app.lang') }}" />
@endsection

@section('title', trans('app.info.news'))

@section('content')
<div class="grey-row">
  <div class="container news">
    <div class="row">

      <div class="col-lg-3 col-md-3 order-lg-first order-md-first order-sm-first order-xs-first pinned-news">
        <h4 class="title">{{ trans('app.info.pinned') }}</h4>
        <hr>
      </div>


      <div class="col-lg-7 col-md-7 all-news">
        <h4 class="title">{{ trans('app.info.news') }}</h4>

        @foreach ($posts as $post)
        <hr>
        <div class="row">
          <div class="col-lg-12 col-md-12 news-block">

            <h4 class="news-block-title">
              <a href="{{ route('news.show', $post->slug) }}">{{ $post->title }}</a>
            </h4>
            <span class="news-info">
              <span class="oi oi-calendar"></span> {{ $post->created_at->format('d.m.Y') }}</span>
            <br>
            <span class="news-info">
              <span class="oi oi-eye"></span> {{ $post->views }}</span>
            <br>
            <br>

            <p class="description">
              {!! $post->description !!}
            </p>

            <a href="{{ route('news.show', $post->slug) }}" class="news-details-btn">{{ trans('app.view_more') }}</a>
          </div>
        </div>
        @endforeach
      </div>

      <div class="col-lg-2 col-md-2 order-lg-last order-md-last order-sm-last order-xs-last pinned-news">
        <h4 class="title">{{ trans('app.info.archive') }}</h4>
        <hr>
      </div>

    </div>
    <div>
        {{ $posts->links() }}
    </div>
  </div>
</div>
@endsection