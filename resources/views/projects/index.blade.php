@extends('layouts.master')

@section('meta')
<meta name="description" content="{{ trans('menu.projects.title') }}. {{ trans('app.brand') }}">
<meta name="keywords" content="{{ trans('menu.projects.title') }}, {{ trans('app.brand') }}">
<meta name="robots" content="all" />
<meta http-equiv="content-language" content="{{ trans('app.lang') }}" />
@endsection

@section('title', trans('menu.projects.title'))

@section('content')
<div class="grey-row">
  <div class="container height">
    <div class="row justify-content-md-center justify-content-lg-center">
      <div class="col-lg-8 col-md-8 white-background">
        <h4 class="title">{{ trans('menu.projects.title') }}</h4>
        <hr>

        @if (count($projects) <= 0)
        <p class="text-muted"><i>{{ trans('app.info.projects_not_found') }}</i></p>
        @else
        @foreach ($projects as $project)
        <h4 class="news-block-title">
          <a href="{{ route('edu_projects.show', $project->slug) }}">{{ $project->title }}</a>
        </h4>
        <span class="news-info">
          <span class="oi oi-calendar"></span> {{ customDateFormat($project->created_at) }}</span>
        <br>
        <span class="news-info">
          <span class="oi oi-eye"></span> {{ $project->views }}</span>
        <br>
        <br>
        <a href="{{ route('edu_projects.show', $project->slug) }}" class="news-details-btn">{{ trans('app.view_more') }}</a>
        <hr>
        @endforeach
        <div class="pages">
          {{ $projects->links() }}
        </div>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection