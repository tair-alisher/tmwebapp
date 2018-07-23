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

        @foreach ($employees as $employee)
        <div class="employee-block">
          <h4>{{ $employee->name }}</h4>
          <div class="row employee-block">
            <div class="col-md-2">
              <img src="{{ asset('images/employees') }}/{{ $employee->image }}" class="img-responsive employee-image" alt=""><br><br>
              <a href="{{ route('employees.show', $employee->slug) }}" class="news-details-btn">{{ trans('app.view_more') }}</a>
            </div>
            <div class="col-md-10">
              <p>{{ $employee->position }}</p>
              <p>{{ $employee->degree }}</p>
              <p>{{ $employee->email }}</p>
            </div>
          </div>
        </div>
        <hr>
        @endforeach

      </div>
    </div>
  </div>
</div>
@endsection