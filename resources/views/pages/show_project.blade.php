{{ increaseProjectViewsNumber($project->id) }}
@extends('layouts.master')

@section('meta')
<meta name="description" content="{{ $project->title }}">
<meta name="keywords" content="{{ $project->title }}">
<meta name="robots" content="all" />
<meta http-equiv="content-language" content="{{ trans('app.lang') }}" />
@endsection

@section('title', $project->title)

@section('content')
<div class="grey-row">
  <div class="container height">
    <div class="row">
      <div class="col-lg-12 col-md-12 white-background">
        <h4 class="title">{{ $project->title }}</h4>
        <span class="news-info">
          <span class="oi oi-calendar"></span> {{ customDateFormat($project->created_at) }}
        </span>
        <br>
        <span class="news-info">
          <span class="oi oi-eye"></span> {{ $project->views }}
        </span>
        <hr>
        {!! $project->content !!}
      </div>
    </div>
  </div>
</div>
@endsection