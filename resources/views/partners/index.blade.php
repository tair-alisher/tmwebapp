@extends('layouts.master')

@section('meta')
<meta name="description" content="{{ trans('app.info.partners') }}. {{ trans('app.brand') }}">
<meta name="keywords" content="{{ trans('app.info.partners') }}, {{ trans('app.brand') }}">
<meta name="robots" content="all" />
<meta http-equiv="content-language" content="{{ trans('app.lang') }}" />
@endsection

@section('title', trans('app.info.partners'))

@section('content')
<div class="grey-row">
  <div class="container height">
    <div class="row">
      <div class="col-lg-12 col-md-12 white-background">
        <h4 class="title">{{ trans('app.info.partners') }}</h4>
        <hr>
        <div class="row">
          @php ($i = 0)
          @php ($amount = count($partners))
          @foreach ($partners as $partner)

          <div class="partner-block col-lg-6 col-md-6">
            <img class="partner-image" src="{{ asset('images/partners') }}/{{ $partner->image }}" alt=""><br>
            <a target="_blank" href="{{ $partner->link }}">{{ trans('app.info.visit_page') }}</a>
          </div>

          @php ($i += 1)

          @if ($i % 2 == 0 && $i != $amount)
        </div><div class="row">
          @endif

          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection