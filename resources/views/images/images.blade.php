@extends('layouts.admin_master')

@section('title', $album->title)

@section('content')
<div class="grey-row">
  <div class="container height">
    <div class="row">
      <div class="col-lg-12 col-md-12 white-background">
        <h4 class="main-color">Альбом: {{ $album->title }}</h4>
        <hr>
        @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session()->get('message') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
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
            <p class="text-right"><a href="{{ route('admin.images.delete', ['id' => $album->album_id, 'image_id' => $image->id]) }}" class="btn btn-link main-color">Удалить</a></p>
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