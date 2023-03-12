<!DOCTYPE html>
<html lang="{!! app()->getLocale()!!}" dir="{!! app()->getLocale() == 'ar' ? 'rtl' : 'ltr' !!}">

@include('website.layouts.head')

<!-- Start Header -->

<body class="@yield('type')">

@include('website.layouts.nav')

<!-- End Navbar -->

@yield('content')




@include('website.layouts.footer')


<!-- Start Footer -->

@include('website.layouts.script')

</body>

</html>