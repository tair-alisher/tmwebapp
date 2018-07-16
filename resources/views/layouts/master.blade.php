<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') | {{ trans('app.brand') }}</title>

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
  @include('layouts.nav')
  <div class="container">
    @yield('content')
  </div>
  @include('layouts.footer')
</body>
</html>