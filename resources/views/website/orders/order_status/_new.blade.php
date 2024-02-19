<div class="row mt-5">
    <div class="col-md-3">
        <a href="{{route('orders')}}" class="d-block text-dark mt-4 mb-4"> <i
                class="fas fa-arrow-circle-right mx-1 text-dark"></i> عوده للطلبات </a>

        {{--        <div class="sidebar my-2">--}}
        {{--            <div class="teble-responsive">--}}
        {{--                <h5 class="text-center py-2">المستخدم</h5>--}}
        {{--                <table class="table table-light">--}}
        {{--                    <tbody>--}}
        {{--                    <tr>--}}
        {{--                        <th>الاسم</th>--}}
        {{--                        <td><b>{{$order->user->name??"غير موجود"}}</b></td>--}}
        {{--                    </tr>--}}
        {{--                    <tr>--}}
        {{--                        <th>الهاتف</th>--}}
        {{--                        <td><b>{{$order->user->phone??"غير موجود"}}</b></td>--}}
        {{--                    </tr>--}}

        {{--                    </tbody>--}}
        {{--                </table>--}}
        {{--            </div>--}}


        {{--        </div>--}}

        <div class="sidebar my-3">

            <div class="teble-responsive">
                {{--                <table class="table table-light">--}}
                {{--                    <tbody>--}}
                {{--                    <tr>--}}
                {{--                        <th>تاريخ الطلب</th>--}}
                {{--                        <td><b>14/8/2022</b></td>--}}
                {{--                    </tr>--}}
                {{--                    <tr>--}}
                {{--                        <th>المكان</th>--}}
                {{--                        <td><b>مكة المكرمة</b></td>--}}
                {{--                    </tr>--}}

                {{--                    </tbody>--}}
                {{--                </table>--}}
            </div>
            <hr>
            <div class="teble-responsive">
                <h5 class="text-center py-2">تفاصيل الطلب</h5>
                <table class="table table-light">
                    <tbody>
                    <tr>
                        <th>تاريخ الطلب</th>
                        <td><b>{{\Carbon\Carbon::parse($order->created_at)->format('Y-m-d')}}</b></td>
                    </tr>
                    <tr>
                        <th>المكان</th>
                        <td><b>{{optional($order->city)->name}}</b></td>
                    </tr>
                    <tr>
                        <th>الموسم</th>
                        <td><b>{{optional($order->season)->name}}</b></td>
                    </tr>
                    <tr>
                        <th>المسافة للمسجد</th>
                        <td><b>{{optional($order->distance)->name}}</b></td>
                    </tr>
                    <tr>

                        <th>الوحدة السكنية</th>
                        <td><b>{{optional($order->unitType)->name}}</b></td>
                    </tr>
                    <tr>
                        <th>عدد الوحدات المطلوبة</th>
                        <td><b>{{$order->unit_number}}</b></td>
                    </tr>
                    <tr>
                        <th>عدد النزلاء</th>
                        <td><b>{{$order->guest_number}}</b></td>
                    </tr>
                    <tr>
                        <th>الميزانية</th>
                        <td><b>{{$order->budget_id?$order->budget->name:"غير محدد"}}</b></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <hr>
            {{--            <div class="teble-responsive">--}}
            {{--                <table class="table table-light">--}}
            {{--                    <tbody>--}}
            {{--                    <tr>--}}
            {{--                        <th>تاريخ الطلب</th>--}}
            {{--                        <td><b>14/8/2022</b></td>--}}
            {{--                    </tr>--}}
            {{--                    <tr>--}}
            {{--                        <th>المكان</th>--}}
            {{--                        <td><b>مكة المكرمة</b></td>--}}
            {{--                    </tr>--}}

            {{--                    </tbody>--}}
            {{--                </table>--}}
            {{--            </div>--}}

        </div>

    </div>
    <div class="col-md-8 pb-5">

        @forelse($offers as $offer)
            <div class="product-gallery offer-bg mt-5 mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="fotorama" data-nav="thumbs">
                                <div data-img="{{asset($offer->unit->image1)}}">
                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                </div>
                                @if($offer->unit->image2)
                                    <div data-img="{{asset($offer->unit->image2)}}">
                                        <a href="https://www.google.com.tw/" target="_blank"></a>
                                    </div>
                                @endif
                                @if($offer->unit->image3)
                                    <div data-img="{{asset($offer->unit->image3)}}">
                                        <a href="https://www.google.com.tw/" target="_blank"></a>
                                    </div>
                                @endif
                                @if($offer->unit->image4)
                                    <div data-img="{{asset($offer->unit->image4)}}">
                                        <a href="https://www.google.com.tw/" target="_blank"></a>
                                    </div>
                                @endif
                                @if($offer->unit->image5)
                                    <div data-img="{{asset($offer->unit->image5)}}">
                                        <a href="https://www.google.com.tw/" target="_blank"></a>
                                    </div>
                                @endif
                                @if($offer->unit->image6)
                                    <div data-img="{{asset($offer->unit->image6)}}">
                                        <a href="https://www.google.com.tw/" target="_blank"></a>
                                    </div>
                                @endif
                                @if($offer->unit->image7)
                                    <div data-img="{{asset($offer->unit->image7)}}">
                                        <a href="https://www.google.com.tw/" target="_blank"></a>
                                    </div>
                                @endif
                            </div>


                        </div>


                        <div class="col-xl-6 col-lg-6">
                            <div class="box">
                                <h1 class="mb-3">{{$offer->unit->name}} - {{$offer->unit->city->name}}</h1>
                                <p>{{$offer->unit->description}}</p>
                                <div class="row p-0 m-0">
                                    <ul class="list-inline flat-option">
                                        <li class="list-inline-item"><img src="{{asset('/')}}asset/images/ico.png"
                                                                          class="img-fluid"></li>
                                        <li class="list-inline-item">نوع الوحدة : {{$offer->unit->type->name}} </li>
                                    </ul>
                                    <ul class="list-inline flat-option">
                                        <li class="list-inline-item"><img src="{{asset('/')}}asset/images/ico.png"
                                                                          class="img-fluid"></li>
                                        <li class="list-inline-item"> عدد النزلاء : {{$offer->unit->guest_numbers}}</li>
                                    </ul>

                                    @foreach($offer->unit->facilities as $facility)
                                        <ul class="list-inline flat-option">
                                            <li class="list-inline-item"><img src="{{asset('/')}}asset/images/ico.png"
                                                                              class="img-fluid"></li>
                                            <li class="list-inline-item"> {{$facility->name}}
                                                : {{$facility->pivot->amount}}  </li>
                                        </ul>
                                    @endforeach
                                </div>

                                {{--                            <div class="price-wishlist">--}}
                                {{--                                <ul class="list-inline">--}}
                                {{--                                    <li class="list-inline-item">--}}
                                {{--                                        <h4>7,000 ريال</h4>--}}
                                {{--                                    </li>--}}
                                {{--                                    <li class="list-inline-item wishlist-sec">--}}
                                {{--                                        <div class="wishlist-icon">--}}
                                {{--                                            <i class="fa fa-heart"></i>--}}
                                {{--                                        </div>--}}
                                {{--                                    </li>--}}
                                {{--                                </ul>--}}
                                {{--                            </div>--}}

                                <div class="row p-0 ">
                                    @foreach($offer->unit->services as $offer->unitService)
                                        <div class="col-lg-4 col-md-6">
                                            <ul class="list-inline" style="font-size: 0.9rem;">
                                                <li class="list-inline-item"><img src="{{asset($offer->unitService->image)}}"
                                                                                  class="img-fluid"></li>
                                                <li class="list-inline-item ">{{$offer->unitService->name}}</li>
                                            </ul>
                                        </div>
                                    @endforeach
                                </div>
<div class="row m-3">
    <a href="{{route('chat',['offer_id'=>$offer->id])}}" class="btn btn-secondary col-md-6 p-2" style="padding: 0;margin: 5px 0 0;">{{__('Start chat')}}</a>
    <a href="#" class="btn btn-mabet col-md-6 p-2" style="padding: 0;margin: 5px 0 0;">{{__('Accept offer')}}</a>

</div>


                            </div>
                        </div>
                    </div>


                </div>
            </div>
        @empty
            <h3>عفواً لا يوجد مسكن حالياً</h3>
        @endforelse


    </div>
</div>
