<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/mabeet-dashboard')}}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('assets/mabeet-dashboard')}}/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/mabeet-dashboard')}}/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets/mabeet-dashboard')}}/assets/images/favicon.ico" />
</head>

<style>
    .login-body
    {
        background: #cfeacb;
    }
    .login-form .card
    {
        background: none !important;
    }

    .login-form .card button
    {
        background: #006e2a;
        color: white
    }

</style>

<body class="login-body">
<div class="login">
    <div class="container pt-3">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img class="img-fluid" src="{{asset('assets/mabeet-dashboard')}}/assets/images/logo.png">
            </div>
            <div class="col-md-6">
{{--                <a class="text-left d-block" href="#">English</a>--}}
            </div>
        </div>
    </div>
</div>


<div class="login-form container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center text-dark mt-5">دخول المسئولين</h2>
            <div class="text-center mb-2 text-dark">اكتب بيانات الدخول للوحة التحكم</div>
            <div class="card my-2">

                <form class="p-lg-5" action="{{ url('dashboard/login') }}" method="POST">

                    @csrf
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email"
                               placeholder="البريد الالكترونى">
                        {{input_error($errors,'email')}}
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" placeholder="كلمة المرور" name="password">
                        {{input_error($errors,'password')}}
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="remember" id="remember" type="checkbox" tabindex="3" />
                            <label class="custom-control-label" for="remember"> {{__('Remember me')}}</label>
                        </div>
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">الدخول للوحة التحكم</button></div>
{{--                    <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not--}}
{{--                        Registered? <a href="#" class="text-dark fw-bold"> Create an--}}
{{--                            Account</a>--}}
{{--                    </div>--}}
                </form>
            </div>

        </div>
    </div>
</div>



<script src="{{asset('assets/mabeet-dashboard')}}/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('assets/mabeet-dashboard')}}/assets/vendors/chart.js/Chart.min.js"></script>
<script src="{{asset('assets/mabeet-dashboard')}}/assets/js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('assets/mabeet-dashboard')}}/assets/js/off-canvas.js"></script>
<script src="{{asset('assets/mabeet-dashboard')}}/assets/js/hoverable-collapse.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.min.js" integrity="sha512-cWEytOR8S4v/Sd3G5P1Yb7NbYgF1YAUzlg1/XpDuouZVo3FEiMXbeWh4zewcYu/sXYQR5PgYLRbhf18X/0vpRg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('assets/mabeet-dashboard')}}/assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{asset('assets/mabeet-dashboard')}}/assets/js/dashboard.js"></script>
<script src="{{asset('assets/mabeet-dashboard')}}/assets/js/todolist.js"></script>
<!-- End custom js for this page -->
</body>

</html>
