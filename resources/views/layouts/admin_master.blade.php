<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="{{ asset('images/logo.ico') }}" type="image/x-icon">
  <title>@yield('title', trans('app.brand')) | Администратор</title>

  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/open-iconic/font/css/open-iconic-bootstrap.css') }}">
  @yield('styles')
</head>
<body>
  @include('layouts.admin_nav')

  <div class="content">
    @yield('content')
  </div>
  
  @include('layouts.admin_footer')
  @yield('scripts')
</body>
</html>