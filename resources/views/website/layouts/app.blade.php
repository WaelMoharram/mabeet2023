<!DOCTYPE html>
<html lang="{!! app()->getLocale()!!}" dir="{!! app()->getLocale() == 'ar' ? 'rtl' : 'ltr' !!}">

@include('website.layouts.head')

<!-- Start Header -->

<body class="mabet-home">

@include('website.layouts.nav')

<!-- End Navbar -->

@yield('content')




@include('website.layouts.footer')


<!-- Start Footer -->

@include('website.layouts.script')

</body>

</html>
