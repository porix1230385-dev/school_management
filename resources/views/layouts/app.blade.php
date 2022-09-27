<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta id="csrf-token" name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Folo education">
    <title>@yield('page_title') | Folo Education System</title>
    @include('partials.login.inc_top')
  </head>
  <body>
    @include('partials.loader')
    <!-- page-wrapper Start-->
    @yield('content')
    <!-- page-wrapper end-->
    @include('partials.inc_bottom')

    @yield('scripts')
  </body>
</html>
