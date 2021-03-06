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
  <div class="container news height">
    <div class="row">

      <div class="col-lg-3 col-md-3 order-lg-first order-md-first order-sm-first order-xs-first pinned-news">
        <h4 class="title">{{ trans('app.info.pinned') }}</h4>
        <hr>
        @if (count($pinned_posts) <= 0)
        <p class="text-muted"><i>{{ trans('app.info.pinned_not_found') }}</i></p>
        @else
        @foreach ($pinned_posts as $pinned_post)
        @if( !empty($pinned_post->slug) )
        <div class="card text-white main-app-background mb-3" style="max-width: 18rem;">
          <div class="card-header">
            <span class="oi oi-calendar"></span> {{ customDateFormat($pinned_post->created_at) }}
          </div>
          <div class="card-body text-primary">
            <a href="{{ route('posts.show', $pinned_post->slug) }}" class="text-white">
              <p class="card-text">{{ $pinned_post->title }}</p>
            </a>
          </div>
          <div class="card-footer">
            <span class="oi oi-eye"></span> {{ $pinned_post->views }}
          </div>
        </div>
        @endif
        @endforeach
        @endif
      </div>


      <div class="col-lg-7 col-md-7 white-background">
        <h4 class="title">{{ trans('app.info.news') }}</h4>

        @if(count($posts) <= 0)
        <hr>
        <p class="text-muted text-center">{{ trans('app.no_results') }}</p>
        <hr>
        @else
        @foreach ($posts as $post)
        <hr>
        <div class="row">
          <div class="col-lg-12 col-md-12 news-block">

            <h4 class="news-block-title">
              <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
            </h4>
            <span class="news-info">
              <span class="oi oi-calendar"></span> {{ customDateFormat($post->created_at) }}
            </span>
            <br>
            <span class="news-info">
              <span class="oi oi-eye"></span> {{ $post->views }}
            </span>
            <br>
            <br>

            <p class="description">
              {!! $post->description !!}
            </p>

            <a href="{{ route('posts.show', $post->slug) }}" class="news-details-btn">{{ trans('app.view_more') }}</a>
          </div>
        </div>
        @endforeach
        <div class="pages">
          <hr>
          {{ $posts->links() }}
      </div>
        @endif
      </div>

      <div class="col-lg-2 col-md-2 order-lg-last order-md-last order-sm-last order-xs-last pinned-news">
        <h4 class="title">{{ trans('app.info.archive') }}</h4>
        <hr>
        <ul class="list-unstyled">
          @foreach ($archives as $stats)
          <li>
            <a class="main-color" href="?month={{ $stats->month }}&year={{ $stats->year }}">
              {{ monthNumberToMonthName($stats->month) . ' ' . $stats->year }} ({{ $stats->published }})
            </a>
          </li>
          @endforeach
        </ul>
      </div>
      
    </div>
    
  </div>
</div>
@endsection