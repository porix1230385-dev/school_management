<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Folo Education">
    <title>@yield('page_title') | Folo Education System</title>
    @include('partials.inc_top')
</head>

<body>
    <!-- Loader starts-->
    @include('partials.loader')
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-sidebar" id="pageWrapper">
        <!-- Page Header Start-->
        @include('partials.top_menu')
        <!-- Page Header Ends -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper sidebar-icon">
            <!-- Page Sidebar Start-->
            @include('partials.menu', $menus = Menu::chargerMenu(1, Auth::user()->id))
            <!-- Page Sidebar Ends-->
            @yield('content')
            <!-- footer start-->
            @include('partials.footer')
        </div>
    </div>
    @include('partials.inc_bottom')
</body>

</html>

