@extends('website.layouts.app')
@section('title'){!! __('Login') !!}@endsection



@section('content')
    <div class="register text-center new-order">
        <div class="container">
            <div class="main-title">
                <h1>اشتراك حساب جديد</h1>
                <h5>اشتراك حساب جديد مع منصّة مبيت لتتمكن من طلب وحدات سكنية.<br> لديك حساب؟ تسجيل الدخول</h5>
            </div>


            <div class="area">

                <section class="grouped-radio">
                    <form>
                        <div class="row mb-3">
                            <div class="col-lg-6 col-md-6">
                                <div class="box">
                                    <input type="radio" id="control_01" name="select" value="1">
                                    <label for="control_01">
                                        <h2>أنا ابحث عن سكن</h2>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="box">
                                    <input type="radio" id="control_02" name="select" value="2">
                                    <label for="control_02">
                                        <h2>أنا مالك وحدة سكنية</h2>
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <hr>
                            </div>

                            <a href="{{route('google-login')}}" class="col-12">
                                <div class="box-social">
                                    <h2>اشترك بحساب جوجل</h2>
                                    <img src="asset/images/google.png" class="img-fluid">
                                </div>
                            </a>

                            <div class="col-12">
                                <div class="box-social">
                                    <h2>اشترك بحساب آبل</h2>
                                    <img src="asset/images/apple.png" class="img-fluid">
                                </div>
                            </div>

                        </div>
                    </form>
                </section>


                <div class="content">
                    <p class="my-5 py-2">بالإشتراك، انت توافق تلقائياً على <a href="index.html">الشروط والأحكام</a> الخاصة بمنصة مبيت.</p>
                </div>
            </div>
        </div>

        <!-- privacy -->


    </div>
@endsection

