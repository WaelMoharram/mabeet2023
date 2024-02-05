<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
@if(app()->getLocale() == 'en')
<link rel="stylesheet" href="{{asset('/')}}/asset/css/bootstrap.min.css">
@else
    <link rel="stylesheet" href="{{asset('/')}}/asset/css/bootstrap-rtl.min.css">

@endif
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link href="https://cdn.jsdelivr.net/npm/wowjs@1.1.3/css/libs/animate.min.css " rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<link href="{{asset('asset/js/parsleyjs/parsley.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{asset('/')}}/asset/css/style.css">
<link rel="stylesheet" href="{{asset('/')}}/asset/css/media.css">
<style>
    .nav-link {
        color: #212529;
    }
    .help-block-error {
        color: red;
    }
</style>
