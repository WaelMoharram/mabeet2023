@extends('website.layouts.app')
@section('title')
    {!! __('My units') !!}
@endsection
@section('content')
    @if($units->count() >0)
        <div class="offers orders order-details new-order mb-4">
            <div class="container">
                <div class="main-title text-center mt-5">

                    <h1>الوحدات السكنية المضافة</h1>
                    <h5>تفاصيل الوحدات السكنية الخاصة بك .</h5>
                </div>

                <div class="row mt-5">
                    <div class="col-md-3">

                    </div>

                    <div class="col-md-8">
                        @foreach($units as $unit)

                            <div class="product-gallery offer-bg m-3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="fotorama" data-nav="thumbs">

                                                <div data-img="{{asset($unit->image1)}}">
                                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                                </div>
                                                @if($unit->image2)
                                                    <div data-img="{{asset($unit->image2)}}">
                                                        <a href="https://www.google.com.tw/" target="_blank"></a>
                                                    </div>
                                                @endif
                                                @if($unit->image3)
                                                    <div data-img="{{asset($unit->image3)}}">
                                                        <a href="https://www.google.com.tw/" target="_blank"></a>
                                                    </div>
                                                @endif
                                                @if($unit->image4)
                                                    <div data-img="{{asset($unit->image4)}}">
                                                        <a href="https://www.google.com.tw/" target="_blank"></a>
                                                    </div>
                                                @endif
                                                @if($unit->image5)
                                                    <div data-img="{{asset($unit->image5)}}">
                                                        <a href="https://www.google.com.tw/" target="_blank"></a>
                                                    </div>
                                                @endif
                                                @if($unit->image6)
                                                    <div data-img="{{asset($unit->image6)}}">
                                                        <a href="https://www.google.com.tw/" target="_blank"></a>
                                                    </div>
                                                @endif
                                                @if($unit->image7)
                                                    <div data-img="{{asset($unit->image7)}}">
                                                        <a href="https://www.google.com.tw/" target="_blank"></a>
                                                    </div>
                                                @endif
                                            </div>


                                        </div>


                                        <div class="col-xl-6 col-lg-6">
                                            <div class="box">
                                                <h1 class="mb-3">{{$unit->name}} - {{$unit->city->name}}</h1>
                                                <p>{{$unit->description}}</p>
                                                <div class="row p-0 m-0">
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="{{asset('/')}}asset/images/ico.png"
                                                                                          class="img-fluid"></li>
                                                        <li class="list-inline-item">نوع الوحدة : {{$unit->type->name}} </li>
                                                    </ul>
                                                    <ul class="list-inline flat-option">
                                                        <li class="list-inline-item"><img src="{{asset('/')}}asset/images/ico.png"
                                                                                          class="img-fluid"></li>
                                                        <li class="list-inline-item"> عدد النزلاء : {{$unit->guest_numbers}}</li>
                                                    </ul>

                                                    @foreach($unit->facilities as $facility)
                                                        <ul class="list-inline flat-option">
                                                            <li class="list-inline-item"><img src="{{asset('/')}}asset/images/ico.png"
                                                                                              class="img-fluid"></li>
                                                            <li class="list-inline-item"> {{$facility->name}} : {{$facility->pivot->amount}}  </li>
                                                        </ul>
                                                    @endforeach

                                                </div>

                                                <div class="price-wishlist">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <h4>{{$unit->amount}} ريال</h4>
                                                        </li>
{{--                                                        <li class="list-inline-item wishlist-sec">--}}
{{--                                                            <div class="wishlist-icon">--}}
{{--                                                                <i class="fa fa-heart"></i>--}}
{{--                                                            </div>--}}
{{--                                                        </li>--}}
                                                    </ul>
                                                </div>

                                                <div class="row p-0 ">
                                                    @foreach($unit->services as $unitService)
                                                    <div class="col-lg-4 col-md-6">
                                                        <ul class="list-inline" style="font-size: 0.9rem;">
                                                            <li class="list-inline-item"><img src="{{asset($unitService->image)}}"
                                                                                              class="img-fluid"></li>
                                                            <li class="list-inline-item ">{{$unitService->name}}</li>
                                                        </ul>
                                                    </div>
                                                    @endforeach

                                                </div>

                                                <div class="btns">
                                                    <a href="{{route('units.edit',$unit->id)}}" class="btn btn-default">تعديل الوحدة</a>
                                                    <a target="_blank" href="https://www.google.com/maps/search/?api=1&query={{$unit->lat}},{{$unit->lng}}" class="btn btn-mabet">عرض الموقع</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>

            </div>
        </div>
    @else

        <div class="no-route  text-center">
            <div class="container">
                <div class="main-title mt-5">
                    <h1>الوحدات السكنية المضافة</h1>
                    <h5>لا توجد وحدات سكنية في الوقت الحالي. ستظهر وحداتك بعد الموافقة على طلباتك.</h5>
                </div>
                <div class="content">
                    <a href="{{route('units.create')}}" class="btn-mabet">إضافة سكن</a>
                </div>
            </div>
        </div>
    @endif
@endsection
