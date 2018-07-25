@extends('layouts.master')

@section('meta')

@endsection

@section('title', $album->title)

@section('content')
<div class="grey-row">
  <div class="container height">
    <div class="row">
      <div class="col-lg-12 col-md-12 white-background">
        <h4 class="title">{{ $album->title }}</h4>
        <hr>

        <div class="card-columns">
          @foreach ($images as $image)

          <div class="card">
            <img class="card-img" src="{{ asset('images/gallery/images/thumbs') }}/{{ $image->image }}" alt="{{ $album->title }}">
          </div>

          @endforeach
        </div>

      </div>
    </div>
  </div>
</div>
@endsection