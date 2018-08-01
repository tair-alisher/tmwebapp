@extends('layouts.master')

@section('title', trans('app.not_found'))

@section('content')
<div class="grey-row">
  <div class="container height">
    <div class="row justify-content-md-center justify-content-lg-center">
      <div class="col-lg-5 col-md-5 white-background text-center">
        <h4 class="main-color">{{ trans('app.not_found') }}</h4>
      </div>
    </div>
  </div>
</div>
@endsection