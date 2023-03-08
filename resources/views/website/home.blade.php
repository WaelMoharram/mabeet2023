@extends('website.layouts.app')
@section('title'){!! __('Home') !!}@endsection



@section('content')

    <section class="home-bg">
        <div class="two-cities">
            <div class="container">
                <h1 class="text-center">أطلب سكن في مكة والمدينة...</h1>
                <p class="text-center">...واستقبل عروض من أصحاب المساكن مباشرة!</p>
                <div class="row">
                    <div class="col-md-6 wow fadeInUp">
                        <a href="#" class="content">
                            <img class="img-fluid" src="{{asset('/')}}asset/images/makka-city.png" alt="">
                            <h2>مكه المكرمه</h2>
                        </a>
                    </div>
                    <div class="col-md-6 wow fadeInUp">
                        <a href="#" class="content">
                            <img class="img-fluid" src="{{asset('/')}}asset/images/madena-city.png" alt="">
                            <h2>المدينه المنوره</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="steps">
            <div class="container">
                <h1 class="text-center">احصل على افضل سكن للحج والعمرة في 3 خطوات فقط!</h1>
                <p class="text-center">بالقرب من المسجد الحرام في مكة او المسجد النبوى في المدينة</p>

                <div class="step">
                    <div class="main-img">
                        <img src="{{asset('/')}}asset/images/image_step_a.png" class="img-fluid">
                    </div>
                    <div class="content wow bounceInDown">
                        <img src="{{asset('/')}}asset/images/step1.png" class="img-fluid">
                        <h4>ادخل متطلبات السكن</h4>
                        <h6>حدد مكان ونوع الوحدة السكنية والميزانية المناسبة لك</h6>
                    </div>
                </div>

                <div class="step">
                    <div class="main-img">
                        <img src="{{asset('/')}}asset/images/image_step_b.png" class="img-fluid">
                    </div>
                    <div class="content wow bounceInDown">
                        <img src="{{asset('/')}}asset/images/step2.png" class="img-fluid">
                        <h4>اختر العرض المناسب</h4>
                        <h6>ستتلقى العديد من العروض المناسبة لطلبك واختر الافضل لك</h6>
                    </div>
                </div>

                <div class="step">
                    <div class="main-img">
                        <img src="{{asset('/')}}asset/images/image_step_c.png" class="img-fluid">
                    </div>
                    <div class="content wow bounceInDown">
                        <img src="{{asset('/')}}asset/images/step3.png" class="img-fluid">
                        <h4>استلم السكن!</h4>
                        <h6>اتفق مع مالك الوحدة السكنية لإستلام الوحدة السكنية</h6>
                    </div>
                </div>

                <div class="step wow fadeInDown">
                    <a href="#" class="btn">ابدأ الطلب الآن</a>
                </div>

            </div>
        </div>



    </section>
@endsection

