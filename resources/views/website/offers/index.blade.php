@extends('website.layouts.app')
@section('title'){!! __('Offers') !!}@endsection
@section('content')
    <!-- New Order -->

    <div class="offers orders order-details new-order mb-4">
        <div class="container">


            <div class="row mt-5">
                <div class="col-md-3">
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
                    <ul class="nav nav-tabs grouped-radio" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                <div class="box">
                                    <label>
                                        <h2>الأحدث</h2>
                                    </label>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                <div class="box">
                                    <label>
                                        <h2>الأقرب</h2>
                                    </label>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                <div class="box">
                                    <label>
                                        <h2>التكلفة</h2>
                                    </label>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                                <div class="box">
                                    <label>
                                        <h2>المفضلة</h2>
                                    </label>
                                </div>
                            </a>
                        </li>

                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content mt-5">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product-gallery">
                                <h4 class="text-center mb-4 accept-title">~ العرض الموافق عليه ~</h4>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="fotorama" data-nav="thumbs">
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                            </div>


                                        </div>


                                        <div class="col-xl-6 col-lg-6">
                                            <div class="box">
                                                <h1 class="mb-3">شروق النماء للوحدات السكنيه غرف لجميع العائلات</h1>
                                                <div class="row p-0 m-0">
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
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
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
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

                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="fotorama" data-nav="thumbs">
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                            </div>


                                        </div>


                                        <div class="col-xl-6 col-lg-6">
                                            <div class="box">
                                                <h1 class="mb-3">شروق النماء للوحدات السكنيه غرف لجميع العائلات</h1>
                                                <div class="row p-0 m-0">
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
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
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
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
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="product-gallery">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="fotorama" data-nav="thumbs">
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                            </div>


                                        </div>


                                        <div class="col-xl-6 col-lg-6">
                                            <div class="box">
                                                <h1 class="mb-3">شروق النماء للوحدات السكنيه غرف لجميع العائلات</h1>
                                                <div class="row p-0 m-0">
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
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
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
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

                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="fotorama" data-nav="thumbs">
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                            </div>


                                        </div>


                                        <div class="col-xl-6 col-lg-6">
                                            <div class="box">
                                                <h1 class="mb-3">شروق النماء للوحدات السكنيه غرف لجميع العائلات</h1>
                                                <div class="row p-0 m-0">
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
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
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
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

                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="product-gallery">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="fotorama" data-nav="thumbs">
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                            </div>


                                        </div>


                                        <div class="col-xl-6 col-lg-6">
                                            <div class="box">
                                                <h1 class="mb-3">شروق النماء للوحدات السكنيه غرف لجميع العائلات</h1>
                                                <div class="row p-0 m-0">
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
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
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
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

                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="fotorama" data-nav="thumbs">
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                            </div>


                                        </div>


                                        <div class="col-xl-6 col-lg-6">
                                            <div class="box">
                                                <h1 class="mb-3">شروق النماء للوحدات السكنيه غرف لجميع العائلات</h1>
                                                <div class="row p-0 m-0">
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
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
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
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

                        <div class="tab-pane" id="tabs-4" role="tabpanel">
                            <div class="product-gallery">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="fotorama" data-nav="thumbs">
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                            </div>


                                        </div>


                                        <div class="col-xl-6 col-lg-6">
                                            <div class="box">
                                                <h1 class="mb-3">شروق النماء للوحدات السكنيه غرف لجميع العائلات</h1>
                                                <div class="row p-0 m-0">
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
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
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
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

                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="fotorama" data-nav="thumbs">
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                <div data-img="{{asset('/')}}/{{asset('/')}}/asset/images/product-image.png">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                            </div>


                                        </div>


                                        <div class="col-xl-6 col-lg-6">
                                            <div class="box">
                                                <h1 class="mb-3">شروق النماء للوحدات السكنيه غرف لجميع العائلات</h1>
                                                <div class="row p-0 m-0">
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
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
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="asset/images/ico.png" class="img-fluid"></li>
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

        </div>
    </div>
    <!-- New Order -->

@endsection

