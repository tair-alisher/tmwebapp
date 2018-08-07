@extends('layouts.master')

@section('meta')
<meta name="description" content="{{ trans('app.info.gallery') }}. {{ trans('app.brand') }}">
<meta name="keywords" content="{{ trans('app.info.gallery') }}, {{ trans('app.brand') }}">
<meta name="robots" content="all" />
<meta http-equiv="content-language" content="{{ trans('app.lang') }}" />
@endsection

@section('title', trans('app.info.gallery'))

@section('content')
<div class="grey-row">
  <div class="container height">
    <div class="row">
      <div class="col-lg-12 col-md-12 white-background">
        <h4 class="title">{{ trans('app.info.gallery') }}</h4>
        <hr>

        <div class="card-deck">
          @php ($i = 0)
          @php ($amount = count($albums))
          @foreach ($albums as $album)

          <div class="card">
            <img class="card-img-top" src="{{ asset('images/gallery/albums/thumbs') }}/{{ $album->image }}" alt="{{ $album->title }}">
            <div class="card-body text-center">
              <h5 class="card-title">{{ $album->title }}</h5>
              <a href="{{ route('albums.show', $album->slug) }}" class="btn btn-link">{{ trans('app.view_more') }}</a>
            </div>
            <div class="card-footer text-center">
              <small class="text-muted">{{ trans('app.updated') }}: {{ customDateFormat($album->updated_at) }}</small>
            </div>
          </div>

          @php ($i += 1)

          @if ($i % 3 == 0 && $i != $amount)
        </div><hr><div class="card-deck">
          @endif

          @endforeach
        </div>
        <div class="pages">
          {{ $albums->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection