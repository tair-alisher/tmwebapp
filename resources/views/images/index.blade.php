@extends('layouts.master')

@section('meta')
<meta name="description" content="{{ trans('app.info.gallery') }}. {{ trans('app.brand') }}">
<meta name="keywords" content="{{ trans('app.info.gallery') }}, {{ trans('app.brand') }}">
<meta name="robots" content="all" />
<meta http-equiv="content-language" content="{{ trans('app.lang') }}" />
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
            <a href="{{ asset('images/gallery/') }}/{{ $image->image }}" title="{{ $album->title }}">
              <img class="card-img" src="{{ asset('images/gallery/thumbs') }}/{{ $image->image }}" alt="{{ $album->title }}">
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
		tLoading: 'Загрузка изображения #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1]
		},
		image: {
			tError: '<a href="%url%">Изображение #%curr%</a> не было загружено.'
		}
	});
});
</script>
@endsection