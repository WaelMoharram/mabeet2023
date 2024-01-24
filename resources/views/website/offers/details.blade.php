@extends('website.layouts.app')
@section('title'){!! __('Offers') !!}@endsection
@section('content')

    <div class="offers orders order-details new-order mb-4">
        <div class="container">
            <div class="main-title text-center">
                <h1>تفاصيل العرض</h1>
                <h5>تفاصيل الوحدة السكنية والعرض الذي تم تقديمه للنزيل.</h5>
            </div>

            <div class="row mt-5">
                <div class="col-md-3">
                    <a href="order-details.html" class="d-block text-dark mt-4 mb-4"> <i class="fas fa-arrow-circle-right mx-1 text-dark"></i> عوده للطلبات </a>

                    <div class="sidebar my-2">
                        <div class="teble-responsive">
                            <h5 class="text-center py-2">بيانات المالك</h5>
                            <table class="table table-light">
                                <tbody>
                                <tr>
                                    <th>الاسم</th>
                                    <td><b>كريم العتيبي</b></td>
                                </tr>
                                <tr>
                                    <th>الهاتف</th>
                                    <td><b>+966 55 123 456</b></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>


                    </div>

                    <div class="sidebar my-3">

                        <div class="teble-responsive">
                            <table class="table table-light">
                                <tbody>
                                <tr>
                                    <th>تاريخ الطلب</th>
                                    <td><b>14/8/2022</b></td>
                                </tr>
                                <tr>
                                    <th>المكان</th>
                                    <td><b>مكة المكرمة</b></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="teble-responsive">
                            <h5 class="text-center py-2">تفاصيل الطلب</h5>
                            <table class="table table-light">
                                <tbody>
                                <tr>
                                    <th>تاريخ الطلب</th>
                                    <td><b>14/8/2022</b></td>
                                </tr>
                                <tr>
                                    <th>المكان</th>
                                    <td><b>مكة المكرمة</b></td>
                                </tr>
                                <tr>
                                    <th>الموسم</th>
                                    <td><b>موسم الحج</b></td>
                                </tr>
                                <tr>
                                    <th>المسافة للمسجد</th>
                                    <td><b>300 متر او اقل</b></td>
                                </tr>
                                <tr>
                                    <th>الوحدة السكنية</th>
                                    <td><b>غرفة</b></td>
                                </tr>
                                <tr>
                                    <th>عدد الوحدات المطلوبة</th>
                                    <td><b>2</b></td>
                                </tr>
                                <tr>
                                    <th>عدد النزلاء</th>
                                    <td><b>3</b></td>
                                </tr>
                                <tr>
                                    <th>الميزانية</th>
                                    <td><b>أقل من 5,000</b></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="teble-responsive">
                            <table class="table table-light">
                                <tbody>
                                <tr>
                                    <th>تاريخ الطلب</th>
                                    <td><b>14/8/2022</b></td>
                                </tr>
                                <tr>
                                    <th>المكان</th>
                                    <td><b>مكة المكرمة</b></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <div class="col-md-8">

                    <div class="product-gallery offer-bg">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="fotorama" data-nav="thumbs">
                                        <div data-img="{{asset('/')}}/asset/images/product-image.png">
                                            <a href="https://www.google.com.tw/" target="_blank"></a>
                                        </div>
                                        <div data-img="{{asset('/')}}/asset/images/product-image.png">
                                            <a href="https://www.google.com.tw/" target="_blank"></a>
                                        </div>
                                        <div data-img="{{asset('/')}}/asset/images/product-image.png">
                                            <a href="https://www.google.com.tw/" target="_blank"></a>
                                        </div>
                                        <div data-img="{{asset('/')}}/asset/images/product-image.png">
                                            <a href="https://www.google.com.tw/" target="_blank"></a>
                                        </div>
                                        <div data-img="{{asset('/')}}/asset/images/product-image.png">
                                            <a href="https://www.google.com.tw/" target="_blank"></a>
                                        </div>
                                        <div data-img="{{asset('/')}}/asset/images/product-image.png">
                                            <a href="https://www.google.com.tw/" target="_blank"></a>
                                        </div>
                                    </div>


                                </div>


                                <div class="col-xl-6 col-lg-6">
                                    <div class="box">
                                        <h1 class="mb-3">شروق النماء للوحدات السكنيه غرف لجميع العائلات</h1>
                                        <div class="row p-0 m-0">
                                            <ul class="list-inline flat-option">
                                                <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/ico.png" class="img-fluid"></li>
                                                <li class="list-inline-item">5 غرف</li>
                                            </ul>
                                            <ul class="list-inline flat-option">
                                                <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/ico.png" class="img-fluid"></li>
                                                <li class="list-inline-item">5 غرف</li>
                                            </ul>
                                            <ul class="list-inline flat-option">
                                                <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/ico.png" class="img-fluid"></li>
                                                <li class="list-inline-item">5 غرف</li>
                                            </ul>
                                        </div>

                                        <div class="price-wishlist">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <h4>7,000 ريال</h4>
                                                </li>
                                                <li class="list-inline-item wishlist-sec">
                                                    <div class="wishlist-icon">
                                                        <i class="fa fa-heart"></i>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="row p-0 ">
                                            <div class="col-lg-4 col-md-6">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/ico.png" class="img-fluid"></li>
                                                    <li class="list-inline-item">5 غرف</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/ico.png" class="img-fluid"></li>
                                                    <li class="list-inline-item">5 غرف</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/ico.png" class="img-fluid"></li>
                                                    <li class="list-inline-item">5 غرف</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/ico.png" class="img-fluid"></li>
                                                    <li class="list-inline-item">5 غرف</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/ico.png" class="img-fluid"></li>
                                                    <li class="list-inline-item">5 غرف</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/ico.png" class="img-fluid"></li>
                                                    <li class="list-inline-item">5 غرف</li>
                                                </ul>
                                            </div>

                                        </div>

                                        <div class="btns">
                                            <a href="" class="btn btn-default">عرض المحادثة</a>
                                            <a href="" class="btn btn-mabet">عرض الموقع</a>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

