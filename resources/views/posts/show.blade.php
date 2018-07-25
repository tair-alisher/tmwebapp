{{ increaseViewsNumber($post->id) }}
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
          @if (count($pinned_posts) <=0 )
          <p class="text-muted">
            <i>{{ trans('app.info.pinned_not_found') }}</i>
            </p>
            @else
            @foreach ($pinned_posts as $pinned_post)
            <div class="card text-white main-app-background mb-3" style="max-width: 18rem;">
              <div class="card-header">
                <span class="oi oi-calendar"></span> {{ customDateFormat($pinned_post->created_at) }}
              </div>
              <div class="card-body text-primary">
                <a href="{{ route('news.show', $pinned_post->slug) }}" class="text-white">
                  <p class="card-text">{{ $pinned_post->title }}</p>
                </a>
              </div>
              <div class="card-footer">
                <span class="oi oi-eye"></span> {{ $pinned_post->views }}
              </div>
            </div>
            @endforeach
            @endif
        </div>

        <div class="col-lg-9 col-md-9 news-block">
          <h4 class="title">{{ $post->title }}</h4>
          <span class="news-info">
            <span class="oi oi-calendar"></span> {{ customDateFormat($post->created_at) }}
          </span>
          <br>
          <span class="news-info">
            <span class="oi oi-eye"></span> {{ $post->views }}
          </span>

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