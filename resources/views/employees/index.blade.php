@extends('layouts.master')

@section('meta')
<meta name="description" content="{{ trans('app.employees') }}. {{ trans('app.brand') }}">
<meta name="keywords" content="{{ trans('app.employees') }}, {{ trans('app.brand') }}">
<meta name="robots" content="all" />
<meta http-equiv="content-language" content="{{ trans('app.lang') }}" />
@endsection

@section('title', trans('app.employees'))

@section('content')
<div class="grey-row">
  <div class="container height">
    <div class="row">
      <div class="col-lg-12 col-md-12 white-background">
        <h4 class="title">{{ trans('app.employees') }}</h4>
        <hr>

        <div class="row employee-block">
          <div class="col-md-3">
            <h4></h4>
          </div>
          <div class="col-md-3"></div>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection