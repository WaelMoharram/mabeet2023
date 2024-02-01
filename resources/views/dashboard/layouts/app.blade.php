<!doctype html>


<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{env('APP_NAME')}} | @yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet"
          href="{{asset('assets/mabeet-dashboard')}}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('assets/mabeet-dashboard')}}/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alexandria:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/mabeet-dashboard')}}/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets/mabeet-dashboard')}}/assets/images/favicon.ico"/>

    @include('dashboard.layouts.partials._styles')
    @yield('header')
</head>
<!-- END: Head-->

<body>
<div class="container-scroller">
    @include('dashboard.layouts.partials._nav')

    <!-- partial:partials/_navbar.html -->
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            @include('dashboard.layouts.partials._menu')

        </nav>

        <!-- partial -->

                @yield('content')
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->

            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@include('dashboard.layouts.partials._scripts')
@include('sweetalert::alert')
@yield('js-validation')
@yield('footer')
</body>
<!-- BEGIN: Body-->


</html>
