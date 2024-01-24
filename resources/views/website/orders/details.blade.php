@extends('website.layouts.app')
@section('title'){!! __('Order details') !!}@endsection
@section('content')
    <!-- New Order -->


    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal body -->
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="text-center mb-3 pt-5">الغاء الطلب</h4>
                    <p class="text-center py-3">هل انت متأكد من رغبتك في الغاء هذا الطلب؟</p>
                    <hr style="width: 50px" class="m-auto py-3">
                    <button type="button" class="btn text-center d-block m-auto">الغاء الطلب</button>

                </div>



            </div>
        </div>
    </div>


    <!-- New Order -->

    <div class="orders order-details new-order mb-4">
        <div class="container">


            <div class="row mt-5">
                <div class="col-md-3">
                    <a href="order-details.html" class="d-block text-dark mt-4 mb-4"> <i class="fas fa-arrow-circle-right mx-1 text-dark"></i> عوده للطلبات </a>
                    <div class="sidebar">
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
                    <a href="#" class="cancel-order d-block text-center mt-4 mb-2" data-toggle="modal" data-target="#myModal">إلغاء الطلب</a>

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
                            <div class="content text-center">
                                <p><b>تم ارسال طلبك لمُلاك الوحدات السكنية بالمواصفات المطلوبة.<br> العروض ستظهر هنا فور توفرها.</b></p>
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
                                                        <li class="list-inline-item"><img src="{{asset('/')}}asset/images/icon-morfk.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="{{asset('/')}}asset/images/icon-morfk.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="{{asset('/')}}asset/images/icon-morfk.png" class="img-fluid"></li>
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
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>

                                                </div>

                                                <div class="btns">
                                                    <a href="" class="btn btn-default">كل التفاصيل</a>
                                                    <a href="" class="btn btn-mabet">قبول العرض</a>
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
                                                        <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
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
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>

                                                </div>

                                                <div class="btns">
                                                    <a href="" class="btn btn-default">كل التفاصيل</a>
                                                    <a href="" class="btn btn-mabet">قبول العرض</a>
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
                                                        <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
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
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>

                                                </div>

                                                <div class="btns">
                                                    <a href="" class="btn btn-default">كل التفاصيل</a>
                                                    <a href="" class="btn btn-mabet">قبول العرض</a>
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
                                                        <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
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
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>

                                                </div>

                                                <div class="btns">
                                                    <a href="" class="btn btn-default">كل التفاصيل</a>
                                                    <a href="" class="btn btn-mabet">قبول العرض</a>
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
                                                        <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
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
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>

                                                </div>

                                                <div class="btns">
                                                    <a href="" class="btn btn-default">كل التفاصيل</a>
                                                    <a href="" class="btn btn-mabet">قبول العرض</a>
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
                                                        <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                        <li class="list-inline-item">5 غرف</li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
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
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}/asset/images/icon-morfk.png" class="img-fluid"></li>
                                                            <li class="list-inline-item">5 غرف</li>
                                                        </ul>
                                                    </div>

                                                </div>

                                                <div class="btns">
                                                    <a href="" class="btn btn-default">كل التفاصيل</a>
                                                    <a href="" class="btn btn-mabet">قبول العرض</a>
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


    <!-- New Order -->
@endsection

