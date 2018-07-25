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
        <h4 class="title">{{ $album->title }}</h4>
        <hr>

        <div class="card-columns popup-gallery">
          @foreach ($images as $image)

          <div class="card">
            <a href="{{ asset('images/gallery/images/') }}/{{ $image->image }}" title="{{ $album->title }}">
              <img class="card-img" src="{{ asset('images/gallery/images/thumbs') }}/{{ $image->image }}" alt="{{ $album->title }}">
            </a>
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

@section('scripts')
<script src="{{ asset('js/magnific-popup/jquery.magnific-popup.js') }}"></script>
<script>
$(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
		}
	});
});
</script>
@endsection