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
        <form action="{{ route('admin.images.add', ['id' => $album->album_id]) }} " method="POST" enctype="multipart/form-data">
          @include('layouts.errors')
          {{ csrf_field() }}
          <input type="file" class="form-control-file mb-2 mr-sm-2" id="images" name="images[]" multiple required>
          <button class="btn btn-primary mb-2">Добавить</button>
        </form>
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