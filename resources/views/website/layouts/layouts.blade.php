<!DOCTYPE html>
<html lang="{{ trans('backLang.code') }}" dir="{{ trans('backLang.direction') }}">
<head>
    @include('website.includes.head')

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">


    <!-- start header -->
    @include('website.includes.header')
    <!-- end header -->
<!--== Wrapper Start ==-->
<div class="wrapper">
      <!-- start Navbar -->
      @include('website.includes.navbar')
    <!-- end Navbar -->
    <!-- Content Section -->
    @yield('content')
    <!-- end of Content Section -->

   
        <!-- start footer -->
    @include('website.includes.footer')
         <!-- end footer -->

</div>
    @include('website.includes.foot')

    @yield('js')

</body>
</html>
