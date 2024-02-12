@extends('dashboard.layouts.app')
@section('title')
    {!! __('Home') !!}
@endsection
@section('header')

    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/dashboard2/resources')}}/app-assets/css/pages/dashboard-ecommerce.min.css">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/dashboard2/resources')}}/app-assets/css/plugins/charts/chart-apex.min.css">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/dashboard2/resources')}}/app-assets/css/plugins/extensions/ext-component-toastr.min.css">

@endsection

@section('content')
    <div class="main-panel user-details form-profile">
        <div class="content-wrapper">
            <div class="card">
                <form>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="">البيانات الشخصية</label>
                            <div class="form-group">
                                <img class="img-fluid absolute-img" src="assets/images/profile.png" alt="">
                                <input id="my-input" class="form-control" type="text" name="" placeholder="الاسم">
                            </div>
                            <div class="form-group">
                                <img class="img-fluid absolute-img" src="assets/images/phone.png" alt="">
                                <input id="my-input" class="form-control" type="text" name="" placeholder="رقم الهاتف">
                            </div>
                            <div class="form-group">
                                <img class="img-fluid absolute-img" src="assets/images/mail.png" alt="">
                                <input id="my-input" class="form-control" type="text" name="" placeholder="البريد الالكتروني">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-save">حفظ التعديلات</button>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <label for="">كلمة المرور</label>
                            <div class="form-group">
                                <img class="img-fluid absolute-img" src="assets/images/password.png" alt="">
                                <input id="my-input" class="form-control" type="text" name="" placeholder="كلمة المرور الحالية">
                            </div>
                            <div class="form-group">
                                <img class="img-fluid absolute-img" src="assets/images/password.png" alt="">
                                <input id="my-input" class="form-control" type="text" name="" placeholder="كلمة المرور الحالية">
                            </div>
                            <div class="form-group">
                                <img class="img-fluid absolute-img" src="assets/images/password.png" alt="">
                                <input id="my-input" class="form-control" type="text" name="" placeholder="تأكيد كلمة المرور">

                            </div>
                            <div class="form-group">
                                <button class="btn btn-default">تعديل كلمة المرور</button>
                            </div>
                        </div>

                        <div class="col-lg-4 pt-3">
                            <label for="" style="opacity:0;">Hidden Label</label>
                            <a href="" class="d-block">
                                <img class="img-fluid" src="assets/images/logout.png" alt=""> تسجيل الخروج
                            </a>
                        </div>
                    </div>

            </div>
            </form>
        </div>

    </div>


@endsection

