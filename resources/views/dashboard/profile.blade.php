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
                    <div class="row m-4">
                        <div class="col-lg-4">
                            <form >

                            <label for="">{{__('Personal data')}}</label>
                            <div class="form-group">
                                <img class="img-fluid absolute-img" src="assets/images/profile.png" alt="">
                                <input id="my-input" value="{{auth()->user()->name}}" class="form-control" type="text" name="name" placeholder="{{__('Name')}}">
                            </div>
                            <div class="form-group">
                                <img class="img-fluid absolute-img" src="assets/images/phone.png" alt="">
                                <input id="my-input" value="{{auth()->user()->phone}}" class="form-control" type="text" name="phone" placeholder="{{__('Phone')}}">
                            </div>
                            <div class="form-group">
                                <img class="img-fluid absolute-img" src="assets/images/mail.png" alt="">
                                <input id="my-input" value="{{auth()->user()->email}}" class="form-control" type="text" name="email" placeholder="{{__('Email')}}">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-save">{{__('Save edits')}}</button>
                            </div>
                            </form>
                        </div>

                        <div class="col-lg-4">
                            <form >

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
                            </form>
                        </div>

                        <div class="col-lg-4 pt-3">
                            <label for="" style="opacity:0;">Hidden Label</label>
                            <form method="post" action="{{route('dashboard.logout')}}">
                                {{ csrf_field() }}
                                <button type=submit class="dropdown-item" style="width: 100%">
                                    <img class="img-fluid" src="{{asset('assets/mabeet-dashboard')}}/assets/images/logout.png" alt="">

                                    {!! __('Log out') !!}
                                </button>
                            </form>
{{--                            <a href="" class="d-block">--}}
{{--                                <img class="img-fluid" src="{{asset('assets/mabeet-dashboard')}}/assets/images/logout.png" alt=""> تسجيل الخروج--}}
{{--                            </a>--}}
                        </div>
                    </div>

            </div>
            </form>
        </div>

    </div>


@endsection

