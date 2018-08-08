@extends('layouts.master')

@section('meta')

@endsection

@section('title', $album->title)

@section('styles')
<link rel="stylesheet" href="{{ asset('js/magnific-popup/magnific-popup.css') }}">
@endsection

@section('content')
<div class="grey-row">
  <div class="container height">
    <div class="row">
      <div class="col-lg-12 col-md-12 white-background">
        <h4 class="main-color">Альбом: {{ $album->title }}</h4>
        <hr>
        <a href="{{ route('admin.albums.create_form') }}" class="btn btn-link main-color">Добавить изображение</a>
        <hr>
        <div class="card-columns popup-gallery">
          @foreach ($images as $image)

          <div class="card">
            <p class="text-right"><a href="#" class="btn btn-link main-color">Удалить</a></p>
            <img class="card-img" src="{{ asset('images/gallery/thumbs') }}/{{ $image->image }}" alt="{{ $album->title }}">
          </div>

          @endforeach
        </div>
        <div class="pages">
          {{ $images->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection