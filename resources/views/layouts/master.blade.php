<!DOCTYPE html>
<html lang="{{ trans('app.lang') }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @yield('meta')
  <title>@yield('title') | {{ trans('app.brand') }}</title>

  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/open-iconic/font/css/open-iconic-bootstrap.css') }}">
</head>
<body>
  @include('layouts.nav')

  <div class="content">
    @yield('content')
  </div>

  @include('layouts.footer')
</body>
</html>