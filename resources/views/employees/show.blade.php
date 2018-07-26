@extends('layouts.master')

@section('meta')
<meta name="description" content="{{ $employee->name }}">
<meta name="keywords" content="{{ $employee->name }}">
<meta name="robots" content="all" />
<meta http-equiv="content-language" content="{{ trans('app.lang') }}" />
@endsection

@section('title', $employee->name)

@section('content')
<div class="grey-row">
  <div class="container height white-background">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <h4 class="title">{{ $employee->name }}</h4>
        <hr>
        <div class="row">
          <div class="col-md-2">
            <img class="img-responsive employee-image" src="{{ asset('images/employees') }}/{{ $employee->image }}" alt="">
          </div>
          <div class="col-md-10">
            <p>{{ $employee->position }}</p>
            <p>{{ $employee->degree }}</p>
            <p>{{ $employee->email }}</p>
          </div>
        </div>
        <br>
      {!! $employee->info !!}
      </div>
    </div>
  </div>
</div>
@endsection