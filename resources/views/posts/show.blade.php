@extends('layouts.master') @section('content')
<h1>{{ $post->title }}</h1>

<div class="panel panel-default">

  <div class="panel-body">
    {{ $post->content }}
  </div>
</div>
@endsection