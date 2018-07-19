@extends('layouts.master')

@section('content')
@foreach ($posts as $post)
<p class="panel panel-default">
  <p class="panel-heading">
    <a href="{{ route('news.show', $post->slug) }}">{{ $post->title }}</a>
  </p>

  <p class="panel-body">
    {{ $post->content }}
  </p>
  <p class="panel-footer text-right">
    <a href="{{ route('news.show', $post->slug) }}">
      {{ trans('app.view_more') }}
    </a>
  </p>
</p>
@endforeach
@endsection